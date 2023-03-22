const { defineConfig } = require("@vue/cli-service");
module.exports = defineConfig({
  pages: {
    index: {
      entry: "src/main.js",
      template: "public/index.html",
      filename: "index.html",
      title: "Index Page",
      chunks: ["chunk-vendors", "chunk-common", "index"],
    },
  },
});
