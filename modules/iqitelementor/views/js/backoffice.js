(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){

var iqitElementorButton;

$(document).ready(function(){

    iqitElementorButton = (function() {

        var $wrapperCms = $('#cms_form').find('.form-wrapper').first(),
            $wrapperProduct = $('#features'),
            $wrapperBlog = $('#elementor-button-blog-wrapper'),
            $btnTemplate = $('#tmpl-btn-edit-with-elementor'),
            $btnTemplateProduct = $('#tmpl-btn-edit-with-elementor-product'),
            $btnTemplateBlog = $('#tmpl-btn-edit-with-elementor-blog');

        function init() {
            $wrapperCms.prepend($btnTemplate.html());
            $wrapperProduct.prepend($btnTemplateProduct.html());
            $wrapperBlog.prepend($btnTemplateBlog.html());
        }
        return { init : init };

    })();

    iqitElementorButton.init();


});

},{}]},{},[1])
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm5vZGVfbW9kdWxlcy9icm93c2VyLXBhY2svX3ByZWx1ZGUuanMiLCJ2aWV3cy9fZGV2L2pzL2JhY2tvZmZpY2UvYmFja29mZmljZS5qcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtBQ0FBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwiZmlsZSI6ImdlbmVyYXRlZC5qcyIsInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gZSh0LG4scil7ZnVuY3Rpb24gcyhvLHUpe2lmKCFuW29dKXtpZighdFtvXSl7dmFyIGE9dHlwZW9mIHJlcXVpcmU9PVwiZnVuY3Rpb25cIiYmcmVxdWlyZTtpZighdSYmYSlyZXR1cm4gYShvLCEwKTtpZihpKXJldHVybiBpKG8sITApO3ZhciBmPW5ldyBFcnJvcihcIkNhbm5vdCBmaW5kIG1vZHVsZSAnXCIrbytcIidcIik7dGhyb3cgZi5jb2RlPVwiTU9EVUxFX05PVF9GT1VORFwiLGZ9dmFyIGw9bltvXT17ZXhwb3J0czp7fX07dFtvXVswXS5jYWxsKGwuZXhwb3J0cyxmdW5jdGlvbihlKXt2YXIgbj10W29dWzFdW2VdO3JldHVybiBzKG4/bjplKX0sbCxsLmV4cG9ydHMsZSx0LG4scil9cmV0dXJuIG5bb10uZXhwb3J0c312YXIgaT10eXBlb2YgcmVxdWlyZT09XCJmdW5jdGlvblwiJiZyZXF1aXJlO2Zvcih2YXIgbz0wO288ci5sZW5ndGg7bysrKXMocltvXSk7cmV0dXJuIHN9KSIsIlxudmFyIGlxaXRFbGVtZW50b3JCdXR0b247XG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XG5cbiAgICBpcWl0RWxlbWVudG9yQnV0dG9uID0gKGZ1bmN0aW9uKCkge1xuXG4gICAgICAgIHZhciAkd3JhcHBlckNtcyA9ICQoJyNjbXNfZm9ybScpLmZpbmQoJy5mb3JtLXdyYXBwZXInKS5maXJzdCgpLFxuICAgICAgICAgICAgJHdyYXBwZXJQcm9kdWN0ID0gJCgnI2ZlYXR1cmVzJyksXG4gICAgICAgICAgICAkd3JhcHBlckJsb2cgPSAkKCcjZWxlbWVudG9yLWJ1dHRvbi1ibG9nLXdyYXBwZXInKSxcbiAgICAgICAgICAgICRidG5UZW1wbGF0ZSA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yJyksXG4gICAgICAgICAgICAkYnRuVGVtcGxhdGVQcm9kdWN0ID0gJCgnI3RtcGwtYnRuLWVkaXQtd2l0aC1lbGVtZW50b3ItcHJvZHVjdCcpLFxuICAgICAgICAgICAgJGJ0blRlbXBsYXRlQmxvZyA9ICQoJyN0bXBsLWJ0bi1lZGl0LXdpdGgtZWxlbWVudG9yLWJsb2cnKTtcblxuICAgICAgICBmdW5jdGlvbiBpbml0KCkge1xuICAgICAgICAgICAgJHdyYXBwZXJDbXMucHJlcGVuZCgkYnRuVGVtcGxhdGUuaHRtbCgpKTtcbiAgICAgICAgICAgICR3cmFwcGVyUHJvZHVjdC5wcmVwZW5kKCRidG5UZW1wbGF0ZVByb2R1Y3QuaHRtbCgpKTtcbiAgICAgICAgICAgICR3cmFwcGVyQmxvZy5wcmVwZW5kKCRidG5UZW1wbGF0ZUJsb2cuaHRtbCgpKTtcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4geyBpbml0IDogaW5pdCB9O1xuXG4gICAgfSkoKTtcblxuICAgIGlxaXRFbGVtZW50b3JCdXR0b24uaW5pdCgpO1xuXG5cbn0pO1xuIl19
