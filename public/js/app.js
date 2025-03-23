/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  console.log("✅ JavaScript Loaded!");
  var buttons = document.querySelectorAll(".favorite-btn");
  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      var destinationId = this.getAttribute("data-id");
      var buttonEl = this;
      fetch("/favorites/toggle", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        },
        body: JSON.stringify({
          destination_id: destinationId
        })
      }).then(function (res) {
        if (!res.ok) throw new Error("Network error");
        return res.json();
      }).then(function (data) {
        if (data.status === "added") {
          buttonEl.textContent = "Remove from Favorites";
          buttonEl.classList.remove("bg-gray-200", "hover:bg-gray-300", "text-gray-800");
          buttonEl.classList.add("bg-red-500", "hover:bg-red-600", "text-white");
        } else if (data.status === "removed") {
          buttonEl.textContent = "Add to Favorites";
          buttonEl.classList.remove("bg-red-500", "hover:bg-red-600", "text-white");
          buttonEl.classList.add("bg-gray-200", "hover:bg-gray-300", "text-gray-800");
        }
      })["catch"](function (err) {
        return console.error("❌ Error toggling favorite:", err);
      });
    });
  });
});

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nError: It looks like you're trying to use `tailwindcss` directly as a PostCSS plugin. The PostCSS plugin has moved to a separate package, so to continue using Tailwind CSS with PostCSS you'll need to install `@tailwindcss/postcss` and update your PostCSS configuration.\n    at Oe (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\tailwindcss\\dist\\lib.js:33:1925)\n    at LazyResult.runOnRoot (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\postcss\\lib\\lazy-result.js:361:16)\n    at LazyResult.runAsync (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\postcss\\lib\\lazy-result.js:290:26)\n    at async Object.loader (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\postcss-loader\\dist\\index.js:97:14)\n    at processResult (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:891:19)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:1037:5\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/scss/app.scss"]();
/******/ 	
/******/ })()
;