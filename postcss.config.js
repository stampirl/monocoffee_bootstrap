const autoprefixer = require("autoprefixer");
module.exports = (ctx) => ({
    map: ctx.options.map,
    plugins: {
        "autoprefixer": {},
        "postcss-import": {},
        "postcss-mixins": {},
        "postcss-simple-vars": {},
        "postcss-extend": {},
        "postcss-nested": {},
        "@hail2u/css-mqpacker": {
            sort: true
        },
        "cssnano": {
            preset: 'default'
        }
    }
})