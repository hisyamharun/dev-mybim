/**
 * Common functions/utils used in all page
 */
if (typeof window.LearnPress == 'undefined') {
	window.LearnPress = {};
}
;
(function ($) {
	$.fn.hasEvent = function (name) {
		var events = $(this).data('events');
		if (typeof events.LearnPress == 'undefined') {
			return false;
		}
		for (i = 0; i < events.LearnPress.length; i++) {
			if (events.LearnPress[i].namespace == name) {
				return true;
			}
		}
		return false;
	}
	$.fn.dataToJSON = function () {
		var json = {};
		$.each(this[0].attributes, function () {
			var m = this.name.match(/^data-(.*)/);
			if (m) {
				json[m[1]] = this.value;
			}
		});
		return json;
	}
	String.prototype.getQueryVar = function (name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(this);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	String.prototype.addQueryVar = function (name, value) {
		var url = this;
		if (name.match(/\[/)) {
			url += url.match(/\?/) ? '&' : '?';
			url += name + '=' + value;
		} else {
			if ((url.indexOf('&' + name + '=') != -1) || (url.indexOf('?' + name + '=') != -1)) {
				url = url.replace(new RegExp(name + "=([^&#]*)", 'g'), name + '=' + value);
			} else {
				url += url.match(/\?/) ? '&' : '?';
				url += name + '=' + value;
			}
		}
		return url;
	}
	String.prototype.removeQueryVar = function (name) {
		var url = this;
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "([\[][^=]*)?=([^&#]*)", 'g');
		url = url.replace(regex, '');
		return url;
	}

	LearnPress.MessageBox = {
		/*
		 *
		 */
		$block         : null,
		$window        : null,
		events         : {},
		instances      : [],
		instance       : null,
		quickConfirm   : function (elem, args) {
			var $e = $(elem);
			$('[learn-press-quick-confirm]').each(function () {
				( $ins = $(this).data('quick-confirm') ) && (console.log($ins), $ins.destroy() );
			});
			!$e.attr('learn-press-quick-confirm') && $e.attr('learn-press-quick-confirm', 'true').data('quick-confirm',
				new (function (elem, args) {
					var $elem = $(elem),
						$div = $('<span class="learn-press-quick-confirm"></span>').insertAfter($elem), //($(document.body)),
						offset = $(elem).position() || {left: 0, top: 0},
						timerOut = null,
						timerHide = null,
						n = 3,
						hide = function () {
							$div.fadeOut('fast', function () {
								$(this).remove();
								$div.parent().css('position', '');
							});
							$elem.removeAttr('learn-press-quick-confirm').data('quick-confirm', undefined);
							stop();
						},
						stop = function () {
							timerHide && clearInterval(timerHide);
							timerOut && clearInterval(timerOut);
						},
						start = function () {
							timerOut = setInterval(function () {
								if (--n == 0) {
									hide.call($div[0]);
									$.isFunction(args.onCancel) && args.onCancel(args.data);
									stop();
								}
								$div.find('span').html(' (' + n + ')');
							}, 1000);

							timerHide = setInterval(function () {
								if (!$elem.is(':visible') || $elem.css("visibility") == 'hidden') {
									stop();
									$div.remove();
									$div.parent().css('position', '');
									$.isFunction(args.onCancel) && args.onCancel(args.data);
								}
							}, 350);
						};
					args = $.extend({
						message : '',
						data    : null,
						onOk    : null,
						onCancel: null,
						offset  : {top: 0, left: 0}
					}, args || {});
					$div.html(args.message || $elem.attr('data-confirm-remove') || 'Are you sure?').append('<span> (' + n + ')</span>').css({});
					$div.click(function () {
						$.isFunction(args.onOk) && args.onOk(args.data);
						hide();
					}).hover(function () {
						stop();
					}, function () {
						start();
					});
					//$div.parent().css('position', 'relative');
					$div.css({
						left: ( ( offset.left + $elem.outerWidth() ) - $div.outerWidth() ) + args.offset.left,
						top : offset.top + $elem.outerHeight() + args.offset.top + 5
					}).hide().fadeIn('fast');
					start();

					this.destroy = function () {
						$div.remove();
						$elem.removeAttr('learn-press-quick-confirm').data('quick-confirm', undefined);
						;
						stop();
						console.log('die');
					};
				})(elem, args)
			);
		},
		show           : function (message, args) {
			//this.hide();
			$.proxy(function () {
				args = $.extend({
					title   : '',
					buttons : '',
					events  : false,
					autohide: false,
					message : message,
					data    : false,
					id      : LearnPress.uniqueId(),
					onHide  : null
				}, args || {});

				this.instances.push(args)
				this.instance = args;

				var $doc = $(document),
					$body = $(document.body);
				if (!this.$block) {
					this.$block = $('<div id="learn-press-message-box-block"></div>').appendTo($body);

				}
				if (!this.$window) {
					this.$window = $('<div id="learn-press-message-box-window"><div id="message-box-wrap"></div> </div>').insertAfter(this.$block);
					this.$window.click(function () {
					})
				}
				//this.events = args.events || {};
				this._createWindow(message, args.title, args.buttons);
				this.$block.show();
				this.$window.show().attr('instance', args.id);
				$(window)
					.bind('resize.message-box', $.proxy(this.update, this))
					.bind('scroll.message-box', $.proxy(this.update, this));
				this.update(true);
				if (args.autohide) {
					setTimeout(function () {
						LearnPress.MessageBox.hide();
						$.isFunction(args.onHide) && args.onHide.call(LearnPress.MessageBox, args);
					}, args.autohide)
				}
			}, this)()
		},
		blockUI        : function (message) {

			message = (message !== false ? ( message ? message : 'Wait a moment' ) : '') + '<div class="message-box-animation"></div>';
			this.show(message);
		},
		hide           : function (delay, instance) {
			if (instance) {
				this._removeInstance(instance.id);
			} else if (this.instance) {
				this._removeInstance(this.instance.id);
			}
			if (this.instances.length == 0) {
				if (this.$block) {
					this.$block.hide();
				}
				if (this.$window) {
					this.$window.hide();
				}
				$(window)
					.unbind('resize.message-box', this.update)
					.unbind('scroll.message-box', this.update);
			} else {
				if (this.instance) {
					this._createWindow(this.instance.message, this.instance.title, this.instance.buttons)
				}
			}

		},
		update         : function (force) {
			var that = this,
				$wrap = this.$window.find('#message-box-wrap'),
				timer = $wrap.data('timer'),
				_update = function () {
					LearnPress.Hook.doAction('learn_press_message_box_before_resize', that);
					var $content = $wrap.find('.message-box-content').css("height", "").css('overflow', 'hidden'),
						width = $wrap.outerWidth(),
						height = $wrap.outerHeight(),
						contentHeight = $content.height(),
						windowHeight = $(window).height(),
						top = $wrap.offset().top;
					if (contentHeight > windowHeight - 50) {
						$content.css({
							height: windowHeight - 50
						});
						height = $wrap.outerHeight()
					} else {
						$content.css("height", "").css('overflow', '');
					}
					$wrap.css({
						marginTop: ( $(window).height() - height ) / 2
					});
					LearnPress.Hook.doAction('learn_press_message_box_resize', height, that);
				};
			if (force) _update();
			timer && clearTimeout(timer);
			timer = setTimeout(_update, 250);
		},
		_removeInstance: function (id) {
			for (var i = 0; i < this.instances.length; i++) {
				if (this.instances[i].id == id) {

					this.instances.splice(i, 1);

					var len = this.instances.length;
					if (len) {
						this.instance = this.instances[len - 1];
						this.$window.attr('instance', this.instance.id)
					} else {
						this.instance = false;
						this.$window.removeAttr('instance')
					}
					break;
				}
			}
		},
		_getInstance   : function (id) {
			for (var i = 0; i < this.instances.length; i++) {
				if (this.instances[i].id == id) {
					return this.instances[i];
					break;
				}
			}
		},
		_createWindow  : function (message, title, buttons) {
			var $wrap = this.$window.find('#message-box-wrap').html('');
			if (title) {
				$wrap.append('<h3 class="message-box-title">' + title + '</h3>');
			}
			$wrap.append($('<div class="message-box-content"></div>').html(message));
			if (buttons) {
				var $buttons = $('<div class="message-box-buttons"></div>');
				switch (buttons) {
					case 'yesNo':
						$buttons.append(this._createButton(LearnPress_Settings.localize.button_yes, 'yes'));
						$buttons.append(this._createButton(LearnPress_Settings.localize.button_no, 'no'));
						break;
					case 'okCancel':
						$buttons.append(this._createButton(LearnPress_Settings.localize.button_ok, 'ok'));
						$buttons.append(this._createButton(LearnPress_Settings.localize.button_cancel, 'cancel'));
						break;
					default:
						$buttons.append(this._createButton(LearnPress_Settings.localize.button_ok, 'ok'));
				}
				$wrap.append($buttons);
			}
		},
		_createButton  : function (title, type) {
			var $button = $('<button type="button" class="button message-box-button message-box-button-' + type + '">' + title + '</button>'),
				callback = 'on' + ( type.substr(0, 1).toUpperCase() + type.substr(1) );
			$button.data('callback', callback).click(function () {
				var instance = $(this).data('instance'),
					callback = instance.events[$(this).data('callback')];
				if ($.type(callback) == 'function') {
					if (callback.apply(LearnPress.MessageBox, [instance]) === false) {
						return;
					} else {
						LearnPress.MessageBox.hide(null, instance);
					}
				} else {
					LearnPress.MessageBox.hide(null, instance);
				}
			}).data('instance', this.instance);
			return $button;
		}
	}
	LearnPress.Hook = {
		hooks       : {action: {}, filter: {}},
		addAction   : function (action, callable, priority, tag) {
			this.addHook('action', action, callable, priority, tag);
			return this;
		},
		addFilter   : function (action, callable, priority, tag) {
			this.addHook('filter', action, callable, priority, tag);
			return this;
		},
		doAction    : function (action) {
			this.doHook('action', action, arguments);
			return this;
		},
		applyFilters: function (action) {
			return this.doHook('filter', action, arguments);
		},
		removeAction: function (action, tag) {
			this.removeHook('action', action, tag);
			return this;
		},
		removeFilter: function (action, priority, tag) {
			this.removeHook('filter', action, priority, tag);
			return this;
		},
		addHook     : function (hookType, action, callable, priority, tag) {
			if (undefined == this.hooks[hookType][action]) {
				this.hooks[hookType][action] = [];
			}
			var hooks = this.hooks[hookType][action];
			if (undefined == tag) {
				tag = action + '_' + hooks.length;
			}
			this.hooks[hookType][action].push({tag: tag, callable: callable, priority: priority});
			return this;
		},
		doHook      : function (hookType, action, args) {

			// splice args from object into array and remove first index which is the hook name
			args = Array.prototype.slice.call(args, 1);

			if (undefined != this.hooks[hookType][action]) {
				var hooks = this.hooks[hookType][action], hook;
				//sort by priority
				hooks.sort(function (a, b) {
					return a["priority"] - b["priority"]
				});
				for (var i = 0; i < hooks.length; i++) {
					hook = hooks[i].callable;
					if (typeof hook != 'function')
						hook = window[hook];
					if ('action' == hookType) {
						hook.apply(null, args);
					} else {
						args[0] = hook.apply(null, args);
					}
				}
			}
			if ('filter' == hookType) {
				return args[0];
			}
			return this;
		},
		removeHook  : function (hookType, action, priority, tag) {
			if (undefined != this.hooks[hookType][action]) {
				var hooks = this.hooks[hookType][action];
				for (var i = hooks.length - 1; i >= 0; i--) {
					if ((undefined == tag || tag == hooks[i].tag) && (undefined == priority || priority == hooks[i].priority)) {
						hooks.splice(i, 1);
					}
				}
			}
			return this;
		}
	};
	LearnPress = $.extend({
		setUrl        : function (url, title) {
			history.pushState({}, title, url);
		},
		getUrl        : function () {
			return window.location.href;
		},
		addQueryVar   : function (name, value, url) {
			return (url == undefined ? window.location.href : url).addQueryVar(name, value);
		},
		removeQueryVar: function (name, url) {
			return (url == undefined ? window.location.href : url).removeQueryVar(name);
		},
		reload        : function (url) {
			if (!url) {
				url = window.location.href;
			}
			window.location.href = url;
		},
		parseJSON     : function (data) {
			var m = data.match(/<!-- LP_AJAX_START -->(.*)<!-- LP_AJAX_END -->/);
			try {
				if (m) {
					data = $.parseJSON(m[1]);
				} else {
					data = $.parseJSON(data);
				}
			} catch (e) {
				LearnPress.log(e);
				data = {};
			}
			return data;
		},
		parseResponse : function (response, type) {
			var m = response.match(/<!-- LP_AJAX_START -->(.*)<!-- LP_AJAX_END -->/);
			if (m) {
				response = m[1];
			}
			return ( type || 'json' ) == 'json' ? this.parseJSON(response) : response;
		},
		doAjax        : function (args) {
			var type = args.type || 'post',
				dataType = args.dataType || 'json',
				action = ( ( args.prefix == undefined ) || 'learnpress_') + args.action,
				data = args.action ? $.extend(args.data, {action: action}) : args.data;

			$.ajax({
				data    : data,
				url     : ( args.url || window.location.href ),
				type    : type,
				dataType: 'html',
				success : function (raw) {
					var response = LearnPress.parseResponse(raw, dataType);
					$.isFunction(args.success) && args.success(response, raw);
				},
				error   : function () {
					$.isFunction(args.error) && args.error.apply(null, LearnPress.funcArgs2Array());
				}
			});
		},

		funcArgs2Array: function (args) {
			var arr = [];
			for (var i = 0; i < args.length; i++) {
				arr.push(args[i]);
			}
			return arr;
		},
		addFilter     : function (action, callback) {
			var $doc = $(document),
				event = 'LearnPress.' + action;
			$doc.on(event, callback);
			LearnPress.log($doc.data('events'));
			return this;
		},
		applyFilters  : function () {
			var $doc = $(document),
				action = arguments[0],
				args = this.funcArgs2Array(arguments);
			if ($doc.hasEvent(action)) {
				args[0] = 'LearnPress.' + action;
				return $doc.triggerHandler.apply($doc, args);
			}
			return args[1];
		},
		addAction     : function (action, callback) {
			return this.addFilter(action, callback);
		},
		doAction      : function () {
			var $doc = $(document),
				action = arguments[0],
				args = this.funcArgs2Array(arguments);
			if ($doc.hasEvent(action)) {
				args[0] = 'LearnPress.' + action;
				$doc.trigger.apply($doc, args);
			}
		},
		toElement     : function (element, args) {
			if ($(element).length == 0) {
				return;
			}
			args = $.extend({
				delay   : 300,
				duration: 'slow',
				offset  : 50,
				callback: null
			}, args || {});
			$('body, html')
				.fadeIn(10)
				.delay(args.delay)
				.animate({
					scrollTop: $(element).offset().top - args.offset
				}, args.duration, args.callback);
		},
		uniqueId      : function (prefix, more_entropy) {
			if (typeof prefix === 'undefined') {
				prefix = '';
			}

			var retId;
			var formatSeed = function (seed, reqWidth) {
				seed = parseInt(seed, 10)
					.toString(16); // to hex str
				if (reqWidth < seed.length) { // so long we split
					return seed.slice(seed.length - reqWidth);
				}
				if (reqWidth > seed.length) { // so short we pad
					return Array(1 + (reqWidth - seed.length))
							.join('0') + seed;
				}
				return seed;
			};

			// BEGIN REDUNDANT
			if (!this.php_js) {
				this.php_js = {};
			}
			// END REDUNDANT
			if (!this.php_js.uniqidSeed) { // init seed with big random int
				this.php_js.uniqidSeed = Math.floor(Math.random() * 0x75bcd15);
			}
			this.php_js.uniqidSeed++;

			retId = prefix; // start with prefix, add current milliseconds hex string
			retId += formatSeed(parseInt(new Date()
					.getTime() / 1000, 10), 8);
			retId += formatSeed(this.php_js.uniqidSeed, 5); // add seed hex string
			if (more_entropy) {
				// for more entropy we add a float lower to 10
				retId += (Math.random() * 10)
					.toFixed(8)
					.toString();
			}

			return retId;
		},
		log           : function () {
			if (typeof LEARN_PRESS_DEBUG != 'undefined' && LEARN_PRESS_DEBUG && console) {
				for (var i = 0, n = arguments.length; i < n; i++) {
					console.log(arguments[i]);
				}
			}
		},
		template      : _.memoize(function (id, data) {
			var compiled,
				options = {
					evaluate   : /<#([\s\S]+?)#>/g,
					interpolate: /\{\{\{([\s\S]+?)\}\}\}/g,
					escape     : /\{\{([^\}]+?)\}\}(?!\})/g,
					variable   : 'data'
				};

			var tmpl = function (data) {
				compiled = compiled || _.template($('#' + id).html(), null, options);
				return compiled(data);
			};
			return data ? tmpl(data) : tmpl;
		}, function (a, b) {
			return JSON.stringify(b)
		}),
		alert         : function (localize, callback) {
			var title = '',
				message = '';
			if (typeof localize == 'string') {
				message = localize;
			} else {
				if (typeof localize['title'] != 'undefined') {
					title = localize['title'];
				}
				if (typeof localize['message'] != 'undefined') {
					message = localize['message'];
				}
			}
			$.alerts.alert(message, title, function (e) {
				LearnPress._on_alert_hide();
				callback && callback(e);
			});
			this._on_alert_show();
		},
		confirm       : function (localize, callback) {
			var title = '',
				message = '';

			if (typeof localize == 'string') {
				message = localize;
			} else {
				if (typeof localize['title'] != 'undefined') {
					title = localize['title'];
				}
				if (typeof localize['message'] != 'undefined') {
					message = localize['message'];
				}
			}
			$.alerts.confirm(message, title, function (e) {
				LearnPress._on_alert_hide();
				callback && callback(e);
			});
			this._on_alert_show();

		},
		_on_alert_show: function () {
			var $container = $('#popup_container'),
				$placeholder = $('<span id="popup_container_placeholder" />').insertAfter($container).data('xxx', $container);
			$container.stop().css('top', '-=50').css('opacity', '0').animate({
				top    : '+=50',
				opacity: 1
			}, 250);
		},
		_on_alert_hide: function () {
			var $holder = $("#popup_container_placeholder"),
				$container = $holder.data('xxx');
			if ($container) {
				$container.replaceWith($holder);
			}
			$container.appendTo($(document.body))
			$container.stop().animate({
				top    : '+=50',
				opacity: 0
			}, 250, function () {
				$(this).remove()
			})
		}
	}, LearnPress);

	$.fn.findNext = function (selector) {
		var $selector = $(selector),
			$root = this.first(),
			index = $selector.index($root),
			$next = $selector.eq(index + 1);
		return $next.length ? $next : false;
	}

	$.fn.findPrev = function (selector) {
		var $selector = $(selector),
			$root = this.first(),
			index = $selector.index($root),
			$prev = $selector.eq(index - 1);
		return $prev.length ? $prev : false;
	}

	function __initSubtabs() {
		$('.learn-press-subtabs').each(function () {
			var $tabContainer = $(this),
				$tabs = $tabContainer.find('a'),
				current = null;
			$tabs.click(function (e) {
				var $tab = $(this),
					$contentID = $tab.attr('href');
				$tab.parent().addClass('current').siblings().removeClass('current');
				current = $($contentID).addClass('current');
				current.siblings().removeClass('current');
				//LearnPress.setUrl($contentID);
				e.preventDefault();
			}).filter(function () {
				return $(this).attr('href') == window.location.hash;
			}).trigger('click');
			if (!current) {
				$tabs.first().trigger('click')
			}
		})
	}

	$(document).ready(function () {
		if (typeof $.alerts != 'undefined') {
			$.alerts.overlayColor = '#000';
			$.alerts.overlayOpacity = 0.5;
		}
	});

})(jQuery);