/**
 * ======================================================================
 * LICENSE: This file is subject to the terms and conditions defined in *
 * file 'license.txt', which is part of this source code package.       *
 * ======================================================================
 */

/**
 * 
 * @param {type} $
 * @returns {undefined}
 */
(function ($) {

    /**
     * 
     * @returns {admin_L6.ErrorFix}
     */
    function ErrorFix() {

        /**
         * 
         */
        this.view = {};

        //initialize the UI
        this.initialize();
    }
    
    /**
     * 
     * @param {type} label
     * @returns {unresolved}
     */
    ErrorFix.prototype.__ = function (label) {
        if (typeof errorFixLocal.translation[label] !== 'undefined') {
            label = errorFixLocal.translation[label];
        }
        
        return label;
    };
    
    /**
     * 
     * @param {type} cl
     * @returns {String}
     */
    ErrorFix.prototype.i = function (cl) {
         return '<i class="' + cl + '"></i>';
     };

    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.initialize = function () {
        var _this = this;

        //initialize main panel tab listener
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            switch ($(e.target).attr('aria-controls')) {
                case 'piegraph':
                    _this.renderPieGraph();
                    break;
                
                case 'notes':
                    if (typeof _this.view.notesList === 'undefined') {
                        _this.renderNotesList();
                    }
                    break;
                    
                case 'history':
                    if (typeof _this.view.historyList === 'undefined') {
                        _this.renderHistoryList();
                    }
                    break;

                default:
                    //by default do nothing
                    break;
            }
        });

        //initialize activation button
        $('#register').bind('click', function (event) {
            event.preventDefault();
            
            if (!$(this).attr('disabled')) {
                $.ajax(ajaxurl, {
                    type: 'POST',
                    data: {
                        action: 'errorfix',
                        sub_action: 'register',
                        _ajax_nonce: errorFixLocal.nonce
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('#register').text(_this.__('Activating...'));
                        $('#register').attr('disabled', true);
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            location.reload();
                        } else {
                            _this.errorMessage(response.message, false);
                        }
                    },
                    error: function () {
                        _this.errorMessage('Unexpected Error', false);
                    },
                    complete: function () {
                        $('#register').text(_this.__('Activate CodePinch'));
                        $('#register').removeAttr('disabled');
                    }
                });
            }   
        });
        
        //credit activation credit
        $('#activate-credit').bind('click', function (event) {
            event.preventDefault();
            
            var license = $.trim($('#credit-activation-license').val());
            if (license) {
                _this.activateLicense(license);
            } else {
                $('#credit-activation-license').focus();
            }
        });
        
        //credit activation credit
        $('#activate-vip').bind('click', function (event) {
            event.preventDefault();
            
            var license = $.trim($('#vip-activation-license').val());
            if (license) {
                _this.activateLicense(license);
            } else {
                $('#vip-activation-license').focus();
            }
        });
        
        //submit payment
        $('#submit-payment').bind('click', function() {
            var instance = $('#instance-id').val();
            var amount   = $('#amount').val();
            window.open(
                'http://codepinch.io?instance=' + instance + '&amount=' + amount + '#pricing',
                '_blank'
            ); 
        });

        //fetching current status BUT only if instance already registered
        if ($('#instance-id').val()) {
            $.ajax(ajaxurl, {
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getStatus',
                    _ajax_nonce: errorFixLocal.nonce
                },
                dataType: 'json',
                beforeSend: function () {
                    $('.balance').html('<small>' + _this.__('updating...') + '</small>');
                },
                success: function (response) {
                    if (response.status === 'success') {
                        if (response.balance) {
                            $('.balance').html(
                                '$ ' + response.balance + ' <small>USD</small>'
                            );
                            $('.balance').attr('data-balance', response.balance);
                        }
                        if (response.message) {
                            _this.errorMessage(response.message, true);
                        }
                    }
                },
                error: function () {
                    $('.balance').html('<small class="error-danger">??</small>');
                }
            });
        }

        //add table custom filter
        $.fn.dataTable.ext.search.push(
            function (settings, data) {
                var show = true;
                if (settings.sTableId === 'error-list') {
                    if (_this.view.errorList.filter) {
                        show = (data[3] === _this.view.errorList.filter);
                    }
                }

                return show;
            }
        );

        //render error list
        this.renderErrorList();
        
        //render patch list
        this.renderPatchList();
        
        //initialize the settings tab
        this.initSettings();
        
        //initialize the contact form
        this.initContactForm();
    };
    
    /**
     * 
     * @param {type} license
     * @returns {undefined}
     */
    ErrorFix.prototype.activateLicense = function (license) {
        var _this = this;
        
        if (!$('.activate-license').attr('disabled')) {
            $.ajax(ajaxurl, {
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'activate',
                    _ajax_nonce: errorFixLocal.nonce,
                    license: license
                },
                dataType: 'json',
                beforeSend: function () {
                    $('.activate-license').text(_this.__('Activating...'));
                    $('.activate-license').attr('disabled', true);
                },
                success: function (response) {
                    if (response.status === 'success') {
                        location.reload();
                        _this.successMessage(
                                'License Activated. Reloading page...'
                        );
                    } else {
                        _this.errorMessage(response.message, false);
                    }
                },
                error: function () {
                    _this.errorMessage('Unexected Error', false);
                },
                complete: function () {
                    $('.activate-license').text('Activate');
                    $('.activate-license').removeAttr('disabled');
                }
            });
        }
    };
    
    /**
     * 
     * @param {type} message
     * @returns {undefined}
     */
    ErrorFix.prototype.errorMessage = function (message, persist) {
        $('.wrap').append($('<div/>', {
            'class' : 'error-message'
        }).html(this.__(message)));
        
        if (persist !== true) {
            setTimeout(function() {
                $('.error-message').remove();
            }, 5000);
        }
    };
    
    /**
     * 
     * @param {type} message
     * @returns {undefined}
     */
    ErrorFix.prototype.successMessage = function (message) {
        $('.wrap').append($('<div/>', {
            'class' : 'success-message'
        }).html(this.__(message)));
        
        setTimeout(function() {
            $('.success-message').remove();
        }, 5000);
    };

    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.renderErrorList = function () {
        var _this = this;
        
        var table = $('#error-list').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            dom: 'lftip',
            pagingType: 'full_numbers',
            ajax: {
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getErrorList',
                    _ajax_nonce: errorFixLocal.nonce
                }
            },
            columnDefs: [
                {visible: false, targets: [2, 3, 4]},
                {className: 'text-smaller', targets: [1]}
            ],
            language: {
                emptyTable: _this.__('No errors detected'),
                lengthMenu: "_MENU_",
                search: "_INPUT_",
                searchPlaceholder: _this.__('Search'),
                info: _this.__('_START_ to _END_ of _TOTAL_'),
                infoFiltered: '<small>' + _this.__('filtered from _MAX_') + '</small>',
                infoEmpty: _this.__('no records')
            }
        });
        //mark linegraph view as loaded
        this.view.errorList = {
            loaded: true,
            table: table,
            filter: null
        };
    };
    
    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.renderNotesList = function () {
        var _this = this;

        var table = $('#notes-list').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            dom: 'ltip',
            pagingType: 'full_numbers',
            ajax: {
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getNotesList',
                    _ajax_nonce: errorFixLocal.nonce
                }
            },
            createdRow: function (row, data) {
                var action = $('<i/>', {
                    'class': 'icon-ok-circled icon-action text-muted'
                }).bind('click', function () {
                    $('#accept-note-modal').modal('show');
                    $('#accept-note').attr('data-code', data[0]);
                });

                $('td:eq(1)', row).html(action);
            },
            columnDefs: [
                {visible: false, targets: [0]},
                {className: 'text-center', targets: [2]}
            ],
            language: {
                lengthMenu: "_MENU_",
                info: _this.__('_START_ to _END_ of _TOTAL_')
            }
        });
        
        //mark linegraph view as loaded
        this.view.notesList = {
            loaded: true,
            table: table
        };
        
        $('#accept-note').bind('click', function(event) {
            event.preventDefault();
            
            //fetching current status
            $.ajax(ajaxurl, {
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'acceptNote',
                    code: $(this).attr('data-code'),
                    _ajax_nonce: errorFixLocal.nonce
                },
                dataType: 'json',
                complete: function () {
                    $('#accept-note-modal').modal('hide');
                    $('#notes-list').DataTable().ajax.reload();
                }
            });
        });
    };
    
    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.renderHistoryList = function () {
        var _this = this;
        
        var table = $('#history-list').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            dom: 'lftip',
            pagingType: 'full_numbers',
            ajax: {
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getHistoryList',
                    _ajax_nonce: errorFixLocal.nonce
                }
            },
            columnDefs: [
                {className: 'text-smaller', targets: [1]}
            ],
            language: {
                lengthMenu: "_MENU_",
                search: "_INPUT_",
                searchPlaceholder: _this.__('Search'),
                info: _this.__('_START_ to _END_ of _TOTAL_'),
                infoFiltered: '<small>' + _this.__('filtered from _MAX_') + '</small>',
                infoEmpty: _this.__('no records')
            }
        });
        //mark linegraph view as loaded
        this.view.historyList = {
            loaded: true,
            table: table
        };
    };

    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.renderPatchList = function () {
        var _this = this;

        $('#patch-list').DataTable({
            autoWidth: false,
            ordering: false,
            processing: true,
            dom: 't',
            paging: false,
            ajax: {
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getPatchList',
                    _ajax_nonce: errorFixLocal.nonce
                }
            },
            language: {
                emptyTable: _this.__('List of fixes is empty')
            },
            columnDefs: [
                {visible: false, targets: [0, 1]},
                {className: 'text-center', targets: [4]}
            ],
            initComplete: function (settings, json) {
                if (json.data.length) {
                    $('#patch-footer').show();
                    $('#apply-fixes').show();
                }
            },
            createdRow: function (row, data) {
                var errors = data[2] + ' error' + (data[2] > 1 ? 's' : '');
                var view = $('<a/>', {
                    'href': '#',
                    'class': 'view-errors'
                }).text('view').bind('click', function (event) {
                    event.preventDefault();
                    _this.view.errorList.filter = data[0];
                    $('#error-list').DataTable().ajax.reload();
                });

                $('td:eq(0)', row).html(errors);
                $('td:eq(0)', row).append(view);

                $('td:eq(1)', row).html('$ ' + data[3] + ' <small>USD</small>');

                var action = $('<i/>', {
                    'class': 'icon-ok-circled icon-action text-' + (data[1] === true ? 'success' : 'muted')
                }).bind('click', function () {
                    _this.updateTotal(data[3] * (data[1] ? -1 : 1));
                    data[1] = !data[1];
                    $(this).toggleClass('text-muted text-success');
                });

                $('td:eq(2)', row).html(action);
            }
        });
        
        $('#select-all-fixes').bind('click', function (event) {
            event.preventDefault();
            //select all
            $.each($('#patch-list').DataTable().data(), function (i, row) {
                if (row[1] === false) {
                    $('#patch-list tbody tr:eq(' + i + ') .icon-action').trigger('click');
                }
            });
        });

        $('#apply-fixes').bind('click', function (event) {
            event.preventDefault();
            
            if (!$(this).attr('disabled')) {
                var count = 0;
                var cost  = 0;

                $.each($('#patch-list').DataTable().data(), function (i, row) {
                    if (row[1]) {
                        count++;
                        cost += parseFloat(row[3]);
                    }
                });

                $('#fix-count').text(count + ' fix' + (count > 1 ? 'es' : ''));
                $('#fix-total-cost').html(
                        '$ ' + cost.toFixed(2) + ' <small>USD</small>'
                );
                $('.apply-step.step-one').show();
                $('.apply-step.step-two').hide();
                $('#confirm-apply').show();
                $('#complete').hide();

                //define what modal to show
                var balance = $('.balance').attr('data-balance') || 0;
                
                if (count === 0) {
                    $('#apply-fixes').attr('disabled', true);
                } else if (cost.toFixed(2) > balance) {
                    $('#low-balance-modal').modal('show');
                } else {
                    $('#apply-modal').modal({backdrop: 'static', show: true});
                }
            }
        });

        //confirm apply
        $('#confirm-apply').bind('click', function () {
            $('.apply-progress').empty();
            $('.apply-step.step-one').hide();
            $('.apply-step.step-two').show();
            $('#confirm-apply').text(_this.__('Applying')).attr('disabled', 'disabled');
            
            $.each($('#patch-list').DataTable().data(), function (i, row) {
                if (row[1]) {
                    var fix = 'Fix ID' + row[0];
                    
                    $.ajax(ajaxurl, {
                        type: 'POST',
                        async: false,
                        dataType: 'json',
                        data: {
                            action: 'errorfix',
                            sub_action: 'apply',
                            _ajax_nonce: errorFixLocal.nonce,
                            patch: row[0]
                        },
                        beforeSend: function () {
                            $('.apply-progress').append(
                                '<li class="text-muted">' + _this.i('icon-spin4 animate-spin') + ' ' + _this.__('Applying') + ' ' + fix + '</li>'
                            );
                        },
                        success: function (response) {
                            if (response.status === 'success') {
                                $('.apply-progress li:last')
                                    .addClass('text-success')
                                    .html(_this.i('icon-ok-circled') + ' ' + fix +': ' + _this.__('applied successfully') + '.');
                            } else {
                                $('.apply-progress li:last')
                                    .addClass('text-danger')
                                    .html(_this.i('icon-block') + ' ' + fix + ': ' + response.message);
                            }
                        },
                        error: function () {
                            $('.apply-progress li:last')
                                    .addClass('text-danger')
                                    .html(_this.i('icon-block') + ' ' + fix + ': ' + _this.__('Unexpected Error'));
                        }
                    });
                }
            });
            
            $('.apply-progress').append(
                '<li class="text-success">' + _this.i('icon-ok-circled') + ' ' + _this.__('Process completed') + '.</li>'
            );
            
            $('#confirm-apply').text(_this.__('Apply')).removeAttr('disabled').hide();
            $('#complete').show();
        });
        
        $('#complete').bind('click', function () {
            location.reload();
        });
        
        //manual check
        $('#manual-check').bind('click', function (event) {
            event.preventDefault();
            
            $.ajax(ajaxurl, {
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'check',
                    _ajax_nonce: errorFixLocal.nonce
                },
                dataType: 'json',
                beforeSend: function () {
                    $('i', '#manual-check').attr('class', 'icon-spin4 animate-spin');
                },
                success: function () {
                    location.reload();
                },
                error: function () {
                    _this.errorMessage('Unexpected Error', false);
                },
                complete: function () {
                    $('i', '#manual-check').attr('class', 'icon-arrows-cw');
                }
            });
        });
    };

    /**
     * 
     * @param {type} number
     * @returns {undefined}
     */
    ErrorFix.prototype.updateTotal = function (number) {
        var total = parseFloat($('#total-cost').attr('data-total')) + number;
        total = total.toFixed(2);

        var balance = $('.balance').attr('data-balance') || 0;

        $('#total-cost').attr('data-total', total);
        $('#total-cost').html('$ ' + total + ' <small>USD</small>');

        if (total > balance) {
            $('#total-cost').addClass('text-danger');
        } else {
            $('#total-cost').removeClass('text-danger');
        }

        $('#apply-fixes').removeAttr('disabled');
    };

    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.renderPieGraph = function () {
        var _this = this;

        if (typeof this.view['piegraph'] === 'undefined') {
            $.ajax(ajaxurl, {
                type: 'POST',
                data: {
                    action: 'errorfix',
                    sub_action: 'getPieData',
                    _ajax_nonce: errorFixLocal.nonce
                },
                dataType: 'json',
                success: function (response) {
                    $('#graph-pie-loader').remove();

                    if (response.length) {
                        var graph = Morris.Donut({
                            element: 'graph-pie',
                            data: response
                        });
                    }

                    //mark linegraph view as loaded
                    _this.view.piegraph = {
                        loaded: true,
                        graph: graph
                    };
                },
                error: function() {
                    _this.errorMessage('Unexpected Error', false);
                }
            });
        }
    };
    
    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.initSettings = function () {
        var _this = this;
        
        $('input,select,textarea', '.settings-container').each(function() {
            $(this).bind('change', function() {
                var value = null;
            
                if ($(this).is(':checkbox')) {
                    value = $(this).prop('checked');
                } else {
                    value = $(this).val();
                }
                
                $.ajax(ajaxurl, {
                    type: 'POST',
                    data: {
                        action: 'errorfix',
                        sub_action: 'updateSetting',
                        _ajax_nonce: errorFixLocal.nonce,
                        setting: $(this).attr('name'),
                        value: value
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.status !== 'success') {
                            _this.errorMessage('Action failed. Try again', false);
                        }
                    },
                    error: function () {
                        _this.errorMessage('Unexpected Error', false);
                    }
                });
            });
        });
    };
    
    /**
     * 
     * @returns {undefined}
     */
    ErrorFix.prototype.initContactForm = function () {
        var _this = this;
        
        $('#send-message').bind('click', function () {
            var fullname = $.trim($('#contact-fullname').val());
            var email    = $.trim($('#contact-email').val());
            var message  = $.trim($('#contact-message').val());
            
            if (fullname && email && message) {
                $.ajax(ajaxurl, {
                    type: 'POST',
                    data: {
                        action: 'errorfix',
                        sub_action: 'sendMessage',
                        _ajax_nonce: errorFixLocal.nonce,
                        fullname: fullname,
                        email: email,
                        message: message
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        $('#send-message').text(_this.__('Sending...'));
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            _this.successMessage('Message has been sent successfully');
                            $('#contact-message').val(''); //clear message
                        } else {
                            _this.errorMessage('Action failed. Try again', false);
                        }
                    },
                    error: function () {
                        _this.errorMessage('Unexpected Error', false);
                    },
                    complete: function () {
                        $('#send-message').text(_this.__('Send Message'));
                    }
                });
            } else {
                _this.errorMessage('All fields are required', false);
            }
        });
    };

    /**
     * 
     */
    $('document').ready(function () {
        new ErrorFix();
    });

})(jQuery);