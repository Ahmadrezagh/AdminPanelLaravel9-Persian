!function (t) {
    var e = {};

    function a(o) {
        if (e[o]) return e[o].exports;
        var r = e[o] = {i: o, l: !1, exports: {}};
        return t[o].call(r.exports, r, r.exports, a), r.l = !0, r.exports
    }

    a.m = t, a.c = e, a.d = function (t, e, o) {
        a.o(t, e) || Object.defineProperty(t, e, {enumerable: !0, get: o})
    }, a.r = function (t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(t, "__esModule", {value: !0})
    }, a.t = function (t, e) {
        if (1 & e && (t = a(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var o = Object.create(null);
        if (a.r(o), Object.defineProperty(o, "default", {
            enumerable: !0,
            value: t
        }), 2 & e && "string" != typeof t) for (var r in t) a.d(o, r, function (e) {
            return t[e]
        }.bind(null, r));
        return o
    }, a.n = function (t) {
        var e = t && t.__esModule ? function () {
            return t.default
        } : function () {
            return t
        };
        return a.d(e, "a", e), e
    }, a.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, a.p = "/", a(a.s = 51)
}({
    51: function (t, e, a) {
        t.exports = a(52)
    }, 52: function (t, e) {
        $((function (t) {
            "use strict";
            (e = $("#bitcoin-chart")).height(110);
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [45, 25, 32, 67, 49, 72, 52, 55, 46, 54, 32, 74, 88, 96, 36, 32, 48, 54, 87, 88, 96, 53, 21, 24, 14, 58, 78, 55, 41, 21, 45, 54, 51, 52, 48],
                        label: "قیمت بیت کوین",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            });
            (e = $("#ethereum-chart")).height(110);
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [88, 96, 36, 32, 48, 54, 87, 88, 96, 53, 21, 24, 14, 45, 25, 32, 67, 49, 72, 52, 55, 46, 54, 32, 74, 58, 78, 55, 41, 21, 45, 54, 51, 52, 48],
                        label: "قیمت اتریوم",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            });
            (e = $("#ripple-chart")).height(110);
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [58, 78, 55, 41, 21, 45, 54, 51, 52, 48, 88, 96, 36, 32, 48, 24, 14, 45, 25, 32, 67, 49, 54, 87, 88, 96, 53, 21, 72, 52, 55, 46, 54, 32, 74],
                        label: "قیمت ریپل",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            });
            (e = $("#dash-chart")).height(110);
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [88, 96, 36, 32, 48, 24, 14, 45, 25, 32, 45, 54, 51, 52, 48, 54, 67, 49, 58, 78, 55, 41, 21, 87, 88, 96, 53, 21, 72, 52, 55, 46, 54, 32, 74],
                        label: "داش-قیمت",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            });
            (e = $("#neo-chart")).height(110);
            var e;
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46],
                        label: "قیمت نئو",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            });
            (e = $("#litecoin-chart")).height(110);
            new Chart(e, {
                type: "line",
                data: {
                    labels: ["تاریخ 1", "تاریخ 2", "تاریخ 3", "تاریخ 4", "تاریخ 5", "تاریخ 6", "تاریخ 7", "تاریخ 8", "تاریخ 9", "تاریخ 10", "تاریخ 11", "تاریخ 12", "تاریخ 13", "تاریخ 14", "تاریخ 15", "تاریخ 16", "تاریخ 17", "تاریخ 18", "تاریخ 19", "تاریخ 20", "تاریخ 21", "تاریخ 22", "تاریخ 23", "تاریخ 24"],
                    type: "line",
                    datasets: [{
                        data: [54, 35, 24, 64, 43, 55, 39, 60, 61, 54, 62, 63, 44, 55, 64, 34, 46, 34, 64, 50, 34, 53, 4, 43, 45, 60, 54, 41, 45, 26, 45, 21, 45, 64],
                        label: "قیمت لایت کوین",
                        backgroundColor: "rgba(98, 89, 202, 0.2)",
                        borderColor: "#6259ca",
                        borderWidth: "2",
                        pointBorderColor: "transparent",
                        pointBackgroundColor: "transparent"
                    }]
                },
                options: {
                    maintainAspectRatio: !1,
                    legend: {display: !1},
                    responsive: !0,
                    tooltips: {
                        mode: "index",
                        titleFontSize: 12,
                        titleFontColor: "#7886a0",
                        bodyFontColor: "#7886a0",
                        backgroundColor: "#fff",
                        titleFontFamily: "iransans",
                        bodyFontFamily: "iransans",
                        cornerRadius: 3,
                        intersect: !1
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {color: "transparent", zeroLineColor: "transparent"},
                            ticks: {fontSize: 2, fontColor: "transparent"}
                        }], yAxes: [{display: !1, ticks: {display: !1}}]
                    },
                    title: {display: !1},
                    elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
                }
            })
        }))
    }
});