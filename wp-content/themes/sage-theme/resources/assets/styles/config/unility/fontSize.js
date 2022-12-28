const { rem, lineHeight } = require('../utils')
const fontSize = {
  xs: ['0.75rem', { lineHeight: '1' }],
  sm: ['0.875rem', { lineHeight: '1.25' }],
  base: ['1rem', { lineHeight: '1.44' }],
  lg: ['1.125rem', { lineHeight: '1.33' }],
  xl: ['1.25rem', { lineHeight: '1.75' }],
  'le':[rem(16),{ lineHeight: '1.75' }],
  'pbig':[rem(20),{ lineHeight: '1.4' }],
  '2xl': ['1.5rem', { lineHeight: '2' }],
  '3xl': ['1.875rem', { lineHeight: '2.25' }],
  '4xl': ['2.25rem', { lineHeight: '2.5' }],
  '5xl': ['3rem', { lineHeight: '1' }],
  '6xl': ['3.75rem', { lineHeight: '1' }],
  '7xl': ['4.5rem', { lineHeight: '1' }],
  '8xl': ['6rem', { lineHeight: '1' }],
  '9xl': ['8rem', { lineHeight: '1' }],
  'h1': ['1.875rem', { lineHeight: '1.13333'}],
  'h2': [rem(24), { lineHeight: lineHeight(24, 32) }],
  'h3': ['1.25rem', { lineHeight: '1.13333' }],
  'h4': ['1.375rem', { lineHeight: '1.3' }],
  'h5': ['1.375rem', { lineHeight: '1.45455' }],
  'h6': ['1.125rem', { lineHeight: '1.27778' }],
  'h1-md': [rem(55), { lineHeight: '1.09' }],
  'h2-md': [rem(48), { lineHeight: '1.33' }],
  'h3-md': ['2.25rem', { lineHeight: '1.33' }],
  'h3-md': ['1.625rem', { lineHeight: '1.38462' },],
  'h4-md': ['1.75rem', { lineHeight: '1.21429' }],
  'h5-md': ['1.5rem', { lineHeight: '1.17' }],
  'h6-md': ['1.25rem', { lineHeight: '1.35' }],
  'btn': ['.875em', { lineHeight: '1.2' }],
  'h3-m': ['2.25rem', { lineHeight: '1.33' }],
  'h4-m': [rem(28), { lineHeight: '1.21' }],
'h5-m': [rem(24), { lineHeight: '1.17' }],

}
module.exports = {
  fontSize
}
