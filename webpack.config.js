const path = require("path"),
  settings = require("./settings");

module.exports = {
  module: {
    rules: [
      {
        test: /\.js$/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },
  mode: PRODUCTION ? "production" : "development",
  devtool: !PRODUCTION ? "inline-source-map" : false,
  output: {
    filename: "[name].js",
  },
  externals: {
    jquery: "jQuery",
  },
};

// module.exports = {
//   entry: {
//     App: settings.themeLocation + "/assets/js/*.js",
//   },
//   output: {
//     path: path.resolve(__dirname, settings.themeLocation + "/assets/js"),
//     filename: "scripts-bundled.js",
//   },
//   module: {
//     rules: [
//       {
//         test: /\.js$/,
//         exclude: /node_modules/,
//         use: {
//           loader: "babel-loader",
//           options: {
//             presets: ["@babel/preset-env"],
//           },
//         },
//       },
//     ],
//   },
//   mode: "development",
// };
