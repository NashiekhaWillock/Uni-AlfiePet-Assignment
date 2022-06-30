module.exports = {
  important: true,
  content: ['./*.php'],
  theme: {
    screens: {
      sm: '480px',
      md: '769px',
      lg: '976px',
      xl: '1440px'
    },
    extend: {
      colors: {
        brightRed: 'hsl(12, 88%, 59%)',
        brightRedLight: 'hsl(12, 88%, 69%)',
        brightRedSupLight: 'hsl(12, 88%, 95%)',
      },
    },
  },
  plugins: [],
}
