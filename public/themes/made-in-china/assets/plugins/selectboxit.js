/*! jquery.selectBoxIt - v3.8.0 - 2013-10-05
* http://www.selectboxit.com
* Copyright (c) 2013 Greg Franko; Licensed MIT*/
!function (a) { "use strict"; a(window.jQuery, window, document) }(function (a, b, c, d) { "use strict"; a.widget("selectBox.selectBoxIt", { VERSION: "3.8.0", options: { showEffect: "none", showEffectOptions: {}, showEffectSpeed: "medium", hideEffect: "none", hideEffectOptions: {}, hideEffectSpeed: "medium", showFirstOption: !0, defaultText: "", defaultIcon: "", downArrowIcon: "", theme: "default", keydownOpen: !0, isMobile: function () { var a = navigator.userAgent || navigator.vendor || b.opera; return /iPhone|iPod|iPad|Silk|Android|BlackBerry|Opera Mini|IEMobile/.test(a) }, "native": !1, aggressiveChange: !1, selectWhenHidden: !0, viewport: a(b), similarSearch: !1, copyAttributes: ["title", "rel"], copyClasses: "button", nativeMousedown: !1, customShowHideEvent: !1, autoWidth: !0, html: !0, populate: "", dynamicPositioning: !0, hideCurrent: !1 }, getThemes: function () { var b = this, c = a(b.element).attr("data-theme") || "c"; return { bootstrap: { focus: "active", hover: "", enabled: "enabled", disabled: "disabled", arrow: "caret", button: "btn", list: "dropdown-menu", container: "bootstrap", open: "open" }, jqueryui: { focus: "ui-state-focus", hover: "ui-state-hover", enabled: "ui-state-enabled", disabled: "ui-state-disabled", arrow: "ui-icon ui-icon-triangle-1-s", button: "ui-widget ui-state-default", list: "ui-widget ui-widget-content", container: "jqueryui", open: "selectboxit-open" }, jquerymobile: { focus: "ui-btn-down-" + c, hover: "ui-btn-hover-" + c, enabled: "ui-enabled", disabled: "ui-disabled", arrow: "ui-icon ui-icon-arrow-d ui-icon-shadow", button: "ui-btn ui-btn-icon-right ui-btn-corner-all ui-shadow ui-btn-up-" + c, list: "ui-btn ui-btn-icon-right ui-btn-corner-all ui-shadow ui-btn-up-" + c, container: "jquerymobile", open: "selectboxit-open" }, "default": { focus: "selectboxit-focus", hover: "selectboxit-hover", enabled: "selectboxit-enabled", disabled: "selectboxit-disabled", arrow: "fa fa-angle-down", button: "selectboxit-btn", list: "selectboxit-list", container: "selectboxit-container", open: "selectboxit-open" } } }, isDeferred: function (b) { return a.isPlainObject(b) && b.promise && b.done }, _create: function (b) { var d = this, e = d.options.populate, f = d.options.theme; if (d.element.is("select")) return d.widgetProto = a.Widget.prototype, d.originalElem = d.element[0], d.selectBox = d.element, d.options.populate && d.add && !b && d.add(e), d.selectItems = d.element.find("option"), d.firstSelectItem = d.selectItems.slice(0, 1), d.documentHeight = a(c).height(), d.theme = a.isPlainObject(f) ? a.extend({}, d.getThemes()["default"], f) : d.getThemes()[f] ? d.getThemes()[f] : d.getThemes()["default"], d.currentFocus = 0, d.blur = !0, d.textArray = [], d.currentIndex = 0, d.currentText = "", d.flipped = !1, b || (d.selectBoxStyles = d.selectBox.attr("style")), d._createDropdownButton()._createUnorderedList()._copyAttributes()._replaceSelectBox()._addClasses(d.theme)._eventHandlers(), d.originalElem.disabled && d.disable && d.disable(), d._ariaAccessibility && d._ariaAccessibility(), d.isMobile = d.options.isMobile(), d._mobile && d._mobile(), d.options["native"] && this._applyNativeSelect(), d.triggerEvent("create"), d }, _createDropdownButton: function () { var b = this, c = b.originalElemId = b.originalElem.id || "", d = b.originalElemValue = b.originalElem.value || "", e = b.originalElemName = b.originalElem.name || "", f = b.options.copyClasses, g = b.selectBox.attr("class") || ""; return b.dropdownText = a("<span/>", { id: c && c + "SelectBoxItText", "class": "selectboxit-text", unselectable: "on", text: b.firstSelectItem.text() }).attr("data-val", d), b.dropdownImageContainer = a("<span/>", { "class": "selectboxit-option-icon-container" }), b.dropdownImage = a("<i/>", { id: c && c + "SelectBoxItDefaultIcon", "class": "selectboxit-default-icon", unselectable: "on" }), b.dropdown = a("<span/>", { id: c && c + "SelectBoxIt", "class": "selectboxit " + ("button" === f ? g : "") + " " + (b.selectBox.prop("disabled") ? b.theme.disabled : b.theme.enabled), name: e, tabindex: b.selectBox.attr("tabindex") || "0", unselectable: "on" }).append(b.dropdownImageContainer.append(b.dropdownImage)).append(b.dropdownText), b.dropdownContainer = a("<span/>", { id: c && c + "SelectBoxItContainer", "class": "selectboxit-container " + b.theme.container + " " + ("container" === f ? g : "") }).append(b.dropdown), b }, _createUnorderedList: function () { var b, c, d, e, f, g, h, i, j, k, l, m, n, o = this, p = "", q = o.originalElemId || "", r = a("<ul/>", { id: q && q + "SelectBoxItOptions", "class": "selectboxit-options", tabindex: -1 }); if (o.options.showFirstOption || (o.selectItems.first().attr("disabled", "disabled"), o.selectItems = o.selectBox.find("option").slice(1)), o.selectItems.each(function (q) { m = a(this), c = "", d = "", b = m.prop("disabled"), e = m.attr("data-icon") || "", f = m.attr("data-iconurl") || "", g = f ? "selectboxit-option-icon-url" : "", h = f ? "style=\"background-image:url('" + f + "');\"" : "", i = m.attr("data-selectedtext"), j = m.attr("data-text"), l = j ? j : m.text(), n = m.parent(), n.is("optgroup") && (c = "selectboxit-optgroup-option", 0 === m.index() && (d = '<span class="selectboxit-optgroup-header ' + n.first().attr("class") + '"data-disabled="true">' + n.first().attr("label") + "</span>")), p += d + '<li data-id="' + q + '" data-val="' + this.value + '" data-disabled="' + b + '" class="' + c + " selectboxit-option " + (a(this).attr("class") || "") + '"><a class="selectboxit-option-anchor"><span class="selectboxit-option-icon-container"><i class="selectboxit-option-icon ' + e + " " + (g || o.theme.container) + '"' + h + "></i></span>" + (o.options.html ? l : o.htmlEscape(l)) + "</a></li>", k = m.attr("data-search"), o.textArray[q] = b ? "" : k ? k : l, this.selected && (o._setText(o.dropdownText, i || l), o.currentFocus = q) }), o.options.defaultText || o.selectBox.attr("data-text")) { var s = o.options.defaultText || o.selectBox.attr("data-text"); o._setText(o.dropdownText, s), o.options.defaultText = s } return r.append(p), o.list = r, o.dropdownContainer.append(o.list), o.listItems = o.list.children("li"), o.listAnchors = o.list.find("a"), o.listItems.first().addClass("selectboxit-option-first"), o.listItems.last().addClass("selectboxit-option-last"), o.list.find("li[data-disabled='true']").not(".optgroupHeader").addClass(o.theme.disabled), o.dropdownImage.addClass(o.selectBox.attr("data-icon") || o.options.defaultIcon || o.listItems.eq(o.currentFocus).find("i").attr("class")), o.dropdownImage.attr("style", o.listItems.eq(o.currentFocus).find("i").attr("style")), o }, _replaceSelectBox: function () { var b, c, e, f = this, g = f.originalElem.id || "", h = f.selectBox.attr("data-size"), i = f.listSize = h === d ? "auto" : "0" === h ? "auto" : +h; return f.selectBox.css("display", "none").after(f.dropdownContainer), f.dropdownContainer.appendTo("body").addClass("selectboxit-rendering"), b = f.dropdown.height(), f.downArrow = a("<i/>", { id: g && g + "SelectBoxItArrow", "class": "selectboxit-arrow", unselectable: "on" }), f.downArrowContainer = a("<span/>", { id: g && g + "SelectBoxItArrowContainer", "class": "selectboxit-arrow-container", unselectable: "on" }).append(f.downArrow), f.dropdown.append(f.downArrowContainer), f.listItems.removeClass("selectboxit-selected").eq(f.currentFocus).addClass("selectboxit-selected"), c = f.downArrowContainer.outerWidth(!0), e = f.dropdownImage.outerWidth(!0), f.options.autoWidth && (f.dropdown.css({ width: "auto" }).css({ width: f.list.outerWidth(!0) + c + e }), f.list.css({ "min-width": f.dropdown.width() })), f.dropdownText.css({ "max-width": f.dropdownContainer.outerWidth(!0) - (c + e) }), f.selectBox.after(f.dropdownContainer), f.dropdownContainer.removeClass("selectboxit-rendering"), "number" === a.type(i) && (f.maxHeight = f.listAnchors.outerHeight(!0) * i), f }, _scrollToView: function (a) { var b = this, c = b.listItems.eq(b.currentFocus), d = b.list.scrollTop(), e = c.height(), f = c.position().top, g = Math.abs(f), h = b.list.height(); return "search" === a ? e > h - f ? b.list.scrollTop(d + (f - (h - e))) : -1 > f && b.list.scrollTop(f - e) : "up" === a ? -1 > f && b.list.scrollTop(d - g) : "down" === a && e > h - f && b.list.scrollTop(d + (g - h + e)), b }, _callbackSupport: function (b) { var c = this; return a.isFunction(b) && b.call(c, c.dropdown), c }, _setText: function (a, b) { var c = this; return c.options.html ? a.html(b) : a.text(b), c }, open: function (a) { var b = this, c = b.options.showEffect, d = b.options.showEffectSpeed, e = b.options.showEffectOptions, f = b.options["native"], g = b.isMobile; return !b.listItems.length || b.dropdown.hasClass(b.theme.disabled) ? b : (f || g || this.list.is(":visible") || (b.triggerEvent("open"), b._dynamicPositioning && b.options.dynamicPositioning && b._dynamicPositioning(), "none" === c ? b.list.show() : "show" === c || "slideDown" === c || "fadeIn" === c ? b.list[c](d) : b.list.show(c, e, d), b.list.promise().done(function () { b._scrollToView("search") })), b._callbackSupport(a), b) }, close: function (a) { var b = this, c = b.options.hideEffect, d = b.options.hideEffectSpeed, e = b.options.hideEffectOptions, f = b.options["native"], g = b.isMobile; return f || g || !b.list.is(":visible") || (b.triggerEvent("close"), "none" === c ? b.list.hide() : "hide" === c || "slideUp" === c || "fadeOut" === c ? b.list[c](d) : b.list.hide(c, e, d)), b._callbackSupport(a), b }, toggle: function () { var a = this, b = a.list.is(":visible"); b ? a.close() : b || a.open() }, _keyMappings: { 38: "up", 40: "down", 13: "enter", 8: "backspace", 9: "tab", 32: "space", 27: "esc" }, _keydownMethods: function () { var a = this, b = a.list.is(":visible") || !a.options.keydownOpen; return { down: function () { a.moveDown && b && a.moveDown() }, up: function () { a.moveUp && b && a.moveUp() }, enter: function () { var b = a.listItems.eq(a.currentFocus); a._update(b), "true" !== b.attr("data-preventclose") && a.close(), a.triggerEvent("enter") }, tab: function () { a.triggerEvent("tab-blur"), a.close() }, backspace: function () { a.triggerEvent("backspace") }, esc: function () { a.close() } } }, _eventHandlers: function () { var b, c, d = this, e = d.options.nativeMousedown, f = d.options.customShowHideEvent, g = d.focusClass, h = d.hoverClass, i = d.openClass; return this.dropdown.on({ "click.selectBoxIt": function () { d.dropdown.trigger("focus", !0), d.originalElem.disabled || (d.triggerEvent("click"), e || f || d.toggle()) }, "mousedown.selectBoxIt": function () { a(this).data("mdown", !0), d.triggerEvent("mousedown"), e && !f && d.toggle() }, "mouseup.selectBoxIt": function () { d.triggerEvent("mouseup") }, "blur.selectBoxIt": function () { d.blur && (d.triggerEvent("blur"), d.close(), a(this).removeClass(g)) }, "focus.selectBoxIt": function (b, c) { var e = a(this).data("mdown"); a(this).removeData("mdown"), e || c || setTimeout(function () { d.triggerEvent("tab-focus") }, 0), c || (a(this).hasClass(d.theme.disabled) || a(this).addClass(g), d.triggerEvent("focus")) }, "keydown.selectBoxIt": function (a) { var b = d._keyMappings[a.keyCode], c = d._keydownMethods()[b]; c && (c(), !d.options.keydownOpen || "up" !== b && "down" !== b || d.open()), c && "tab" !== b && a.preventDefault() }, "keypress.selectBoxIt": function (a) { var b = a.charCode || a.keyCode, c = d._keyMappings[a.charCode || a.keyCode], e = String.fromCharCode(b); d.search && (!c || c && "space" === c) && d.search(e, !0, !0), "space" === c && a.preventDefault() }, "mouseenter.selectBoxIt": function () { d.triggerEvent("mouseenter") }, "mouseleave.selectBoxIt": function () { d.triggerEvent("mouseleave") } }), d.list.on({ "mouseover.selectBoxIt": function () { d.blur = !1 }, "mouseout.selectBoxIt": function () { d.blur = !0 }, "focusin.selectBoxIt": function () { d.dropdown.trigger("focus", !0) } }), d.list.on({ "mousedown.selectBoxIt": function () { d._update(a(this)), d.triggerEvent("option-click"), "false" === a(this).attr("data-disabled") && "true" !== a(this).attr("data-preventclose") && d.close(), setTimeout(function () { d.dropdown.trigger("focus", !0) }, 0) }, "focusin.selectBoxIt": function () { d.listItems.not(a(this)).removeAttr("data-active"), a(this).attr("data-active", ""); var b = d.list.is(":hidden"); (d.options.searchWhenHidden && b || d.options.aggressiveChange || b && d.options.selectWhenHidden) && d._update(a(this)), a(this).addClass(g) }, "mouseup.selectBoxIt": function () { e && !f && (d._update(a(this)), d.triggerEvent("option-mouseup"), "false" === a(this).attr("data-disabled") && "true" !== a(this).attr("data-preventclose") && d.close()) }, "mouseenter.selectBoxIt": function () { "false" === a(this).attr("data-disabled") && (d.listItems.removeAttr("data-active"), a(this).addClass(g).attr("data-active", ""), d.listItems.not(a(this)).removeClass(g), a(this).addClass(g), d.currentFocus = +a(this).attr("data-id")) }, "mouseleave.selectBoxIt": function () { "false" === a(this).attr("data-disabled") && (d.listItems.not(a(this)).removeClass(g).removeAttr("data-active"), a(this).addClass(g), d.currentFocus = +a(this).attr("data-id")) }, "blur.selectBoxIt": function () { a(this).removeClass(g) } }, ".selectboxit-option"), d.list.on({ "click.selectBoxIt": function (a) { a.preventDefault() } }, "a"), d.selectBox.on({ "change.selectBoxIt, internal-change.selectBoxIt": function (a, e) { var f, g; e || (f = d.list.find('li[data-val="' + d.originalElem.value + '"]'), f.length && (d.listItems.eq(d.currentFocus).removeClass(d.focusClass), d.currentFocus = +f.attr("data-id"))), f = d.listItems.eq(d.currentFocus), g = f.attr("data-selectedtext"), b = f.attr("data-text"), c = b ? b : f.find("a").text(), d._setText(d.dropdownText, g || c), d.dropdownText.attr("data-val", d.originalElem.value), f.find("i").attr("class") && (d.dropdownImage.attr("class", f.find("i").attr("class")).addClass("selectboxit-default-icon"), d.dropdownImage.attr("style", f.find("i").attr("style"))), d.triggerEvent("changed") }, "disable.selectBoxIt": function () { d.dropdown.addClass(d.theme.disabled) }, "enable.selectBoxIt": function () { d.dropdown.removeClass(d.theme.disabled) }, "open.selectBoxIt": function () { var a, b = d.list.find("li[data-val='" + d.dropdownText.attr("data-val") + "']"); b.length || (b = d.listItems.not("[data-disabled=true]").first()), d.currentFocus = +b.attr("data-id"), a = d.listItems.eq(d.currentFocus), d.dropdown.addClass(i).removeClass(h).addClass(g), d.listItems.removeClass(d.selectedClass).removeAttr("data-active").not(a).removeClass(g), a.addClass(d.selectedClass).addClass(g), d.options.hideCurrent && (d.listItems.show(), a.hide()) }, "close.selectBoxIt": function () { d.dropdown.removeClass(i) }, "blur.selectBoxIt": function () { d.dropdown.removeClass(g) }, "mouseenter.selectBoxIt": function () { a(this).hasClass(d.theme.disabled) || d.dropdown.addClass(h) }, "mouseleave.selectBoxIt": function () { d.dropdown.removeClass(h) }, destroy: function (a) { a.preventDefault(), a.stopPropagation() } }), d }, _update: function (a) { var b, c, d, e = this, f = e.options.defaultText || e.selectBox.attr("data-text"), g = e.listItems.eq(e.currentFocus); "false" === a.attr("data-disabled") && (b = e.listItems.eq(e.currentFocus).attr("data-selectedtext"), c = g.attr("data-text"), d = c ? c : g.text(), (f && e.options.html ? e.dropdownText.html() === f : e.dropdownText.text() === f) && e.selectBox.val() === a.attr("data-val") ? e.triggerEvent("change") : (e.selectBox.val(a.attr("data-val")), e.currentFocus = +a.attr("data-id"), e.originalElem.value !== e.dropdownText.attr("data-val") && e.triggerEvent("change"))) }, _addClasses: function (a) { var b = this, c = (b.focusClass = a.focus, b.hoverClass = a.hover, a.button), d = a.list, e = a.arrow, f = a.container; return b.openClass = a.open, b.selectedClass = "selectboxit-selected", b.downArrow.addClass(b.selectBox.attr("data-downarrow") || b.options.downArrowIcon || e), b.dropdownContainer.addClass(f), b.dropdown.addClass(c), b.list.addClass(d), b }, refresh: function (a, b) { var c = this; return c._destroySelectBoxIt()._create(!0), b || c.triggerEvent("refresh"), c._callbackSupport(a), c }, htmlEscape: function (a) { return String(a).replace(/&/g, "&amp;").replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/</g, "&lt;").replace(/>/g, "&gt;") }, triggerEvent: function (a) { var b = this, c = b.options.showFirstOption ? b.currentFocus : b.currentFocus - 1 >= 0 ? b.currentFocus : 0; return b.selectBox.trigger(a, { selectbox: b.selectBox, selectboxOption: b.selectItems.eq(c), dropdown: b.dropdown, dropdownOption: b.listItems.eq(b.currentFocus) }), b }, _copyAttributes: function () { var a = this; return a._addSelectBoxAttributes && a._addSelectBoxAttributes(), a }, _realOuterWidth: function (a) { if (a.is(":visible")) return a.outerWidth(!0); var b, c = a.clone(); return c.css({ visibility: "hidden", display: "block", position: "absolute" }).appendTo("body"), b = c.outerWidth(!0), c.remove(), b } }); var e = a.selectBox.selectBoxIt.prototype; e.add = function (b, c) { this._populate(b, function (b) { var d, e, f = this, g = a.type(b), h = 0, i = [], j = f._isJSON(b), k = j && f._parseJSON(b); if (b && ("array" === g || j && k.data && "array" === a.type(k.data)) || "object" === g && b.data && "array" === a.type(b.data)) { for (f._isJSON(b) && (b = k), b.data && (b = b.data), e = b.length; e - 1 >= h; h += 1)d = b[h], a.isPlainObject(d) ? i.push(a("<option/>", d)) : "string" === a.type(d) && i.push(a("<option/>", { text: d, value: d })); f.selectBox.append(i) } else b && "string" === g && !f._isJSON(b) ? f.selectBox.append(b) : b && "object" === g ? f.selectBox.append(a("<option/>", b)) : b && f._isJSON(b) && a.isPlainObject(f._parseJSON(b)) && f.selectBox.append(a("<option/>", f._parseJSON(b))); return f.dropdown ? f.refresh(function () { f._callbackSupport(c) }, !0) : f._callbackSupport(c), f }) }, e._parseJSON = function (b) { return JSON && JSON.parse && JSON.parse(b) || a.parseJSON(b) }, e._isJSON = function (a) { var b, c = this; try { return b = c._parseJSON(a), !0 } catch (d) { return !1 } }, e._populate = function (b, c) { var d = this; return b = a.isFunction(b) ? b.call() : b, d.isDeferred(b) ? b.done(function (a) { c.call(d, a) }) : c.call(d, b), d }, e._ariaAccessibility = function () { var b = this, c = a("label[for='" + b.originalElem.id + "']"); return b.dropdownContainer.attr({ role: "combobox", "aria-autocomplete": "list", "aria-haspopup": "true", "aria-expanded": "false", "aria-owns": b.list[0].id }), b.dropdownText.attr({ "aria-live": "polite" }), b.dropdown.on({ "disable.selectBoxIt": function () { b.dropdownContainer.attr("aria-disabled", "true") }, "enable.selectBoxIt": function () { b.dropdownContainer.attr("aria-disabled", "false") } }), c.length && b.dropdownContainer.attr("aria-labelledby", c[0].id), b.list.attr({ role: "listbox", "aria-hidden": "true" }), b.listItems.attr({ role: "option" }), b.selectBox.on({ "open.selectBoxIt": function () { b.list.attr("aria-hidden", "false"), b.dropdownContainer.attr("aria-expanded", "true") }, "close.selectBoxIt": function () { b.list.attr("aria-hidden", "true"), b.dropdownContainer.attr("aria-expanded", "false") } }), b }, e._addSelectBoxAttributes = function () { var b = this; return b._addAttributes(b.selectBox.prop("attributes"), b.dropdown), b.selectItems.each(function (c) { b._addAttributes(a(this).prop("attributes"), b.listItems.eq(c)) }), b }, e._addAttributes = function (b, c) { var d = this, e = d.options.copyAttributes; return b.length && a.each(b, function (b, d) { var f = d.name.toLowerCase(), g = d.value; "null" === g || -1 === a.inArray(f, e) && -1 === f.indexOf("data") || c.attr(f, g) }), d }, e.destroy = function (a) { var b = this; return b._destroySelectBoxIt(), b.widgetProto.destroy.call(b), b._callbackSupport(a), b }, e._destroySelectBoxIt = function () { var b = this; return b.dropdown.off(".selectBoxIt"), a.contains(b.dropdownContainer[0], b.originalElem) && b.dropdownContainer.before(b.selectBox), b.dropdownContainer.remove(), b.selectBox.removeAttr("style").attr("style", b.selectBoxStyles), b.selectBox.show(), b.triggerEvent("destroy"), b }, e.disable = function (a) { var b = this; return b.options.disabled || (b.close(), b.selectBox.attr("disabled", "disabled"), b.dropdown.removeAttr("tabindex").removeClass(b.theme.enabled).addClass(b.theme.disabled), b.setOption("disabled", !0), b.triggerEvent("disable")), b._callbackSupport(a), b }, e.disableOption = function (b, c) { var d, e, f, g = this, h = a.type(b); return "number" === h && (g.close(), d = g.selectBox.find("option").eq(b), g.triggerEvent("disable-option"), d.attr("disabled", "disabled"), g.listItems.eq(b).attr("data-disabled", "true").addClass(g.theme.disabled), g.currentFocus === b && (e = g.listItems.eq(g.currentFocus).nextAll("li").not("[data-disabled='true']").first().length, f = g.listItems.eq(g.currentFocus).prevAll("li").not("[data-disabled='true']").first().length, e ? g.moveDown() : f ? g.moveUp() : g.disable())), g._callbackSupport(c), g }, e._isDisabled = function () { var a = this; return a.originalElem.disabled && a.disable(), a }, e._dynamicPositioning = function () { var b = this; if ("number" === a.type(b.listSize)) b.list.css("max-height", b.maxHeight || "none"); else { var c = b.dropdown.offset().top, d = b.list.data("max-height") || b.list.outerHeight(), e = b.dropdown.outerHeight(), f = b.options.viewport, g = f.height(), h = a.isWindow(f.get(0)) ? f.scrollTop() : f.offset().top, i = g + h >= c + e + d, j = !i; if (b.list.data("max-height") || b.list.data("max-height", b.list.outerHeight()), j) if (b.dropdown.offset().top - h >= d) b.list.css("max-height", d), b.list.css("top", b.dropdown.position().top - b.list.outerHeight()); else { var k = Math.abs(c + e + d - (g + h)), l = Math.abs(b.dropdown.offset().top - h - d); l > k ? (b.list.css("max-height", d - k - e / 2), b.list.css("top", "auto")) : (b.list.css("max-height", d - l - e / 2), b.list.css("top", b.dropdown.position().top - b.list.outerHeight())) } else b.list.css("max-height", d), b.list.css("top", "auto") } return b }, e.enable = function (a) { var b = this; return b.options.disabled && (b.triggerEvent("enable"), b.selectBox.removeAttr("disabled"), b.dropdown.attr("tabindex", 0).removeClass(b.theme.disabled).addClass(b.theme.enabled), b.setOption("disabled", !1), b._callbackSupport(a)), b }, e.enableOption = function (b, c) { var d, e = this, f = a.type(b); return "number" === f && (d = e.selectBox.find("option").eq(b), e.triggerEvent("enable-option"), d.removeAttr("disabled"), e.listItems.eq(b).attr("data-disabled", "false").removeClass(e.theme.disabled)), e._callbackSupport(c), e }, e.moveDown = function (a) { var b = this; b.currentFocus += 1; var c = "true" === b.listItems.eq(b.currentFocus).attr("data-disabled") ? !0 : !1, d = b.listItems.eq(b.currentFocus).nextAll("li").not("[data-disabled='true']").first().length; if (b.currentFocus === b.listItems.length) b.currentFocus -= 1; else { if (c && d) return b.listItems.eq(b.currentFocus - 1).blur(), b.moveDown(), void 0; c && !d ? b.currentFocus -= 1 : (b.listItems.eq(b.currentFocus - 1).blur().end().eq(b.currentFocus).focusin(), b._scrollToView("down"), b.triggerEvent("moveDown")) } return b._callbackSupport(a), b }, e.moveUp = function (a) { var b = this; b.currentFocus -= 1; var c = "true" === b.listItems.eq(b.currentFocus).attr("data-disabled") ? !0 : !1, d = b.listItems.eq(b.currentFocus).prevAll("li").not("[data-disabled='true']").first().length; if (-1 === b.currentFocus) b.currentFocus += 1; else { if (c && d) return b.listItems.eq(b.currentFocus + 1).blur(), b.moveUp(), void 0; c && !d ? b.currentFocus += 1 : (b.listItems.eq(this.currentFocus + 1).blur().end().eq(b.currentFocus).focusin(), b._scrollToView("up"), b.triggerEvent("moveUp")) } return b._callbackSupport(a), b }, e._setCurrentSearchOption = function (a) { var b = this; return (b.options.aggressiveChange || b.options.selectWhenHidden || b.listItems.eq(a).is(":visible")) && b.listItems.eq(a).data("disabled") !== !0 && (b.listItems.eq(b.currentFocus).blur(), b.currentIndex = a, b.currentFocus = a, b.listItems.eq(b.currentFocus).focusin(), b._scrollToView("search"), b.triggerEvent("search")), b }, e._searchAlgorithm = function (a, b) { var c, d, e, f, g = this, h = !1, i = g.textArray, j = g.currentText; for (c = a, e = i.length; e > c; c += 1) { for (f = i[c], d = 0; e > d; d += 1)-1 !== i[d].search(b) && (h = !0, d = e); if (h || (g.currentText = g.currentText.charAt(g.currentText.length - 1).replace(/[|()\[{.+*?$\\]/g, "\\$0"), j = g.currentText), b = new RegExp(j, "gi"), j.length < 3) { if (b = new RegExp(j.charAt(0), "gi"), -1 !== f.charAt(0).search(b)) return g._setCurrentSearchOption(c), (f.substring(0, j.length).toLowerCase() !== j.toLowerCase() || g.options.similarSearch) && (g.currentIndex += 1), !1 } else if (-1 !== f.search(b)) return g._setCurrentSearchOption(c), !1; if (f.toLowerCase() === g.currentText.toLowerCase()) return g._setCurrentSearchOption(c), g.currentText = "", !1 } return !0 }, e.search = function (a, b, c) { var d = this; c ? d.currentText += a.replace(/[|()\[{.+*?$\\]/g, "\\$0") : d.currentText = a.replace(/[|()\[{.+*?$\\]/g, "\\$0"); var e = d._searchAlgorithm(d.currentIndex, new RegExp(d.currentText, "gi")); return e && d._searchAlgorithm(0, d.currentText), d._callbackSupport(b), d }, e._updateMobileText = function () { var a, b, c, d = this; a = d.selectBox.find("option").filter(":selected"), b = a.attr("data-text"), c = b ? b : a.text(), d._setText(d.dropdownText, c), d.list.find('li[data-val="' + a.val() + '"]').find("i").attr("class") && d.dropdownImage.attr("class", d.list.find('li[data-val="' + a.val() + '"]').find("i").attr("class")).addClass("selectboxit-default-icon") }, e._applyNativeSelect = function () { var a = this; return a.dropdownContainer.append(a.selectBox), a.dropdown.attr("tabindex", "-1"), a.selectBox.css({ display: "block", visibility: "visible", width: a._realOuterWidth(a.dropdown), height: a.dropdown.outerHeight(), opacity: "0", position: "absolute", top: "0", left: "0", cursor: "pointer", "z-index": "999999", margin: a.dropdown.css("margin"), padding: "0", "-webkit-appearance": "menulist-button" }), a.originalElem.disabled && a.triggerEvent("disable"), this }, e._mobileEvents = function () { var a = this; a.selectBox.on({ "changed.selectBoxIt": function () { a.hasChanged = !0, a._updateMobileText(), a.triggerEvent("option-click") }, "mousedown.selectBoxIt": function () { a.hasChanged || !a.options.defaultText || a.originalElem.disabled || (a._updateMobileText(), a.triggerEvent("option-click")) }, "enable.selectBoxIt": function () { a.selectBox.removeClass("selectboxit-rendering") }, "disable.selectBoxIt": function () { a.selectBox.addClass("selectboxit-rendering") } }) }, e._mobile = function () { var a = this; return a.isMobile && (a._applyNativeSelect(), a._mobileEvents()), this }, e.remove = function (b, c) { var d, e, f = this, g = a.type(b), h = 0, i = ""; if ("array" === g) { for (e = b.length; e - 1 >= h; h += 1)d = b[h], "number" === a.type(d) && (i += i.length ? ", option:eq(" + d + ")" : "option:eq(" + d + ")"); f.selectBox.find(i).remove() } else "number" === g ? f.selectBox.find("option").eq(b).remove() : f.selectBox.find("option").remove(); return f.dropdown ? f.refresh(function () { f._callbackSupport(c) }, !0) : f._callbackSupport(c), f }, e.selectOption = function (b, c) { var d = this, e = a.type(b); return "number" === e ? d.selectBox.val(d.selectItems.eq(b).val()).change() : "string" === e && d.selectBox.val(b).change(), d._callbackSupport(c), d }, e.setOption = function (b, c, d) { var e = this; return "string" === a.type(b) && (e.options[b] = c), e.refresh(function () { e._callbackSupport(d) }, !0), e }, e.setOptions = function (b, c) { var d = this; return a.isPlainObject(b) && (d.options = a.extend({}, d.options, b)), d.refresh(function () { d._callbackSupport(c) }, !0), d }, e.wait = function (a, b) { var c = this; return c.widgetProto._delay.call(c, b, a), c } });
