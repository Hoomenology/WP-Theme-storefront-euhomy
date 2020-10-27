module.exports = {
  purge: [],
  theme: {
    extend: {
      colors: {
        gray: {
          '100': '#f5f5f5',
          '200': '#eeeeee',
          '300': '#e6e6e6',
          '400': '#bdbdbd',
          '500': '#cccccc',
          '600': '#999999',
          '700': '#666666',
          '800': '#424242',
          '900': '#333333',
        },
        blue: {
          '1': '#008aff',
          '100': '#ebf8ff',
          '200': '#bee3f8',
          '300': '#90cdf4',
          '400': '#63b3ed',
          '500': '#4299e1',
          '600': '#3182ce',
          '700': '#2b6cb0',
          '800': '#2c5282',
          '900': '#2a4365',
        }
      },
      fontSize: {
        'xs': ['12px', '13px'],
        'base': ['14px', '22px'],
        'sm': ['16px', '28px'],
        'lg': ['20px', '22px'],
        'xl': ['26px', '72px'],
        '2xl': ['36px', '72px'],
        '3xl': ['61px', '72px'],
      },
      borderRadius: {
        'none': '0',
        '1': '1px',
        '3': '3px',
        '5': '5px',
        '10': '10px',
        '15': '15px',
        '20': '20px',
        'full': '9999px',
      },
      container: {
        center: true,
        padding: {
          default: '1rem',
          sm: '2rem',
          lg: '4rem',
          xl: '5rem',
        },
      },
    }
  },
  variants: {},
  plugins: [],
};