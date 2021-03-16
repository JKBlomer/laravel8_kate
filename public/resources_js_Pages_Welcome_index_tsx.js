(self["webpackChunklaravel_kate"] = self["webpackChunklaravel_kate"] || []).push([["resources_js_Pages_Welcome_index_tsx"],{

/***/ "./resources/js/Pages/Welcome/index.tsx":
/*!**********************************************!*\
  !*** ./resources/js/Pages/Welcome/index.tsx ***!
  \**********************************************/
/***/ (function(__unused_webpack_module, exports, __webpack_require__) {

"use strict";


var __importDefault = this && this.__importDefault || function (mod) {
  return mod && mod.__esModule ? mod : {
    "default": mod
  };
};

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var react_1 = __importDefault(__webpack_require__(/*! react */ "./node_modules/react/index.js"));

var WelcomePage = function WelcomePage() {
  return react_1["default"].createElement("div", {
    className: "container"
  }, react_1["default"].createElement("h1", null, "Welcome to Kate's Bookmark app"), react_1["default"].createElement("a", {
    href: "/login"
  }, "Login"), react_1["default"].createElement("br", null), react_1["default"].createElement("a", {
    href: "/register"
  }, "Register"));
};

exports.default = WelcomePage;

/***/ })

}]);