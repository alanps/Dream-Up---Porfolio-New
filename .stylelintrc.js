module.exports = {
  extends: [
    '@roots/sage/stylelint-config',
    '@roots/bud-sass/stylelint-config',
  ],
  rules: {
    'color-no-invalid-hex': true,
    'indentation': 'tab',
    'selector-class-pattern': ['^([a-z][a-z0-9]*)(-[a-z0-9]+)*$', '^([a-z][a-z0-9]*)(_[a-z0-9]+)*$']
  },
}