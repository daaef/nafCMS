/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";

    
    // ============================================================== 
    // Our Visitor
    // ============================================================== 
    var sparklineLogin = function() {
        $('#earnings').sparkline([6, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9], {
            type: 'bar',
            height: '40',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#137eff'
        });
    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();

    // ============================================================== 
    // world map
    // ==============================================================
    jQuery('#visitfromworld').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        borderColor: '#fff',
        borderOpacity: 0,
        borderWidth: 0,
        zoomOnScroll: false,
        color: 'rgba(223,226,233, 0.8)',
        regionStyle: {
            initial: {
                fill: 'rgba(223,226,233, 0.8)',
                'stroke-width': 1,
                'stroke': 'rgba(223,226,233, 0.8)'
            }
        },
        markerStyle: {
            initial: {
                r: 5,
                'fill': '#dfe2e9',
                'fill-opacity': 1,
                'stroke': '#dfe2e9',
                'stroke-width': 1,
                'stroke-opacity': 1
            },
        },
        enableZoom: true,
        hoverColor: '#79e580',
        markers: [{
            latLng: [21.00, 78.00],
            name: 'India : 9347',
            style: {
                fill: '#2961ff'
            }
        }, {
            latLng: [-33.00, 151.00],
            name: 'Australia : 250',
            style: {
                fill: '#2961ff'
            }
        }, {
            latLng: [36.77, -119.41],
            name: 'USA : 250',
            style: {
                fill: '#2961ff'
            }
        }, {
            latLng: [55.37, -3.41],
            name: 'UK   : 250',
            style: {
                fill: '#2961ff'
            }
        }, {
            latLng: [25.20, 55.27],
            name: 'UAE : 250',
            style: {
                fill: '#2961ff'
            }
        }],
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#93d5ed', '#93d5ee'],
        selectedColor: '#cbd0db',
        selectedRegions: [],
        showTooltip: true,
        onRegionClick: function(element, code, region) {
            var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
            alert(message);
        }
    });
});