module.exports = {
  plugins: {
    '@fullhuman/postcss-purgecss': {
      content: [
        './**/*.php',
        './source/**/*.js',
        './assets/**/*.js',
        './template-parts/**/*.php',
        './inc/**/*.php'
      ],
      defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || [],
      safelist: {
        standard: [
          /^wp-/,
          /^admin-/,
          /^post-/,
          /^page-/,
          /^custom-/,
          /^is-/,
          /^has-/,
          /^align/,
          /^theme-/,
          /^search-/,
          /^screen-/,
          /^widget/,
          /^nav-/,
          /^menu-/
        ],
        deep: [/^wp-block/, /^block-/],
        greedy: [/^elementor-/, /^slick-/, /^owl-/]
      }
    }
  }
} 