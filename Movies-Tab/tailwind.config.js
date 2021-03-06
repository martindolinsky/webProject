module.exports = {
  theme: {animations: { // defaults to {}; the following are examples
  'spin': {
    from: {
      transform: 'rotate(0deg)',
    },
    to: {
      transform: 'rotate(360deg)',
    },
  },
  'jump': {
    '0%': {
      transform: 'translateY(0%)',
    },
    '50%': {
      transform: 'translateY(-100%)',
    },
    '100%': {
      transform: 'translateY(0%)',
    },
  },
},
animationDuration: { // defaults to these values
  'default': '1s',
  '0s': '0s',
  '1s': '1s',
  '2s': '2s',
  '3s': '3s',
  '4s': '4s',
  '5s': '5s',
},
animationTimingFunction: { // defaults to these values
  'default': 'ease',
  'linear': 'linear',
  'ease': 'ease',
  'ease-in': 'ease-in',
  'ease-out': 'ease-out',
  'ease-in-out': 'ease-in-out',
},
animationDelay: { // defaults to these values
  'default': '0s',
  '0s': '0s',
  '1s': '1s',
  '2s': '2s',
  '3s': '3s',
  '4s': '4s',
  '5s': '5s',
},
animationIterationCount: { // defaults to these values
  'default': 'infinite',
  'once': '1',
  'infinite': 'infinite',
},
animationDirection: { // defaults to these values
  'default': 'normal',
  'normal': 'normal',
  'reverse': 'reverse',
  'alternate': 'alternate',
  'alternate-reverse': 'alternate-reverse',
},
animationFillMode: { // defaults to these values
  'default': 'none',
  'none': 'none',
  'forwards': 'forwards',
  'backwards': 'backwards',
  'both': 'both',
},
animationPlayState: { // defaults to these values
  'running': 'running',
  'paused': 'paused',
},
transitionProperty: { // defaults to these values
  'none': 'none',
  'all': 'all',
  'color': 'color',
  'bg': 'background-color',
  'border': 'border-color',
  'colors': ['color', 'background-color', 'border-color'],
  'opacity': 'opacity',
  'transform': 'transform',
},
transitionDuration: { // defaults to these values
  'default': '250ms',
  '0': '0ms',
  '100': '100ms',
  '250': '250ms',
  '500': '500ms',
  '750': '750ms',
  '1000': '1000ms',
},
transitionTimingFunction: { // defaults to these values
  'default': 'ease',
  'linear': 'linear',
  'ease': 'ease',
  'ease-in': 'ease-in',
  'ease-out': 'ease-out',
  'ease-in-out': 'ease-in-out',
},
transitionDelay: { // defaults to these values
  'default': '0ms',
  '0': '0ms',
  '100': '100ms',
  '250': '250ms',
  '500': '500ms',
  '750': '750ms',
  '1000': '1000ms',
},
willChange: { // defaults to these values
  'auto': 'auto',
  'scroll': 'scroll-position',
  'contents': 'contents',
  'opacity': 'opacity',
  'transform': 'transform',
},
    extend: {}
  },
  variants: {
    alignContent: ['responsive'],
    alignItems: ['responsive'],
    alignSelf: ['responsive'],
    appearance: ['responsive'],
    backgroundAttachment: ['responsive'],
    backgroundColor: ['responsive', 'hover', 'focus'],
    backgroundPosition: ['responsive'],
    backgroundRepeat: ['responsive'],
    backgroundSize: ['responsive'],
    borderCollapse: ['responsive'],
    borderColor: ['responsive', 'hover', 'focus'],
    borderRadius: ['responsive'],
    borderStyle: ['responsive'],
    borderWidth: ['responsive'],
    boxShadow: ['responsive', 'hover', 'focus'],
    cursor: ['responsive'],
    display: ['responsive', 'group-hover'],
    fill: ['responsive'],
    flex: ['responsive'],
    flexDirection: ['responsive'],
    flexGrow: ['responsive'],
    flexShrink: ['responsive'],
    flexWrap: ['responsive'],
    float: ['responsive'],
    fontFamily: ['responsive'],
    fontSize: ['responsive'],
    fontSmoothing: ['responsive'],
    fontStyle: ['responsive'],
    fontWeight: ['responsive', 'hover', 'focus'],
    height: ['responsive'],
    inset: ['responsive'],
    justifyContent: ['responsive'],
    letterSpacing: ['responsive'],
    lineHeight: ['responsive'],
    listStylePosition: ['responsive'],
    listStyleType: ['responsive'],
    margin: ['responsive'],
    maxHeight: ['responsive'],
    maxWidth: ['responsive'],
    minHeight: ['responsive'],
    minWidth: ['responsive'],
    objectFit: ['responsive'],
    objectPosition: ['responsive'],
    opacity: ['responsive', 'hover'],
    order: ['responsive'],
    outline: ['responsive', 'focus'],
    overflow: ['responsive'],
    padding: ['responsive'],
    pointerEvents: ['responsive'],
    position: ['responsive'],
    resize: ['responsive'],
    stroke: ['responsive'],
    tableLayout: ['responsive'],
    textAlign: ['responsive'],
    textColor: ['responsive', 'hover', 'focus'],
    textDecoration: ['responsive', 'hover', 'focus'],
    textTransform: ['responsive'],
    userSelect: ['responsive'],
    verticalAlign: ['responsive'],
    visibility: ['responsive'],
    whitespace: ['responsive'],
    width: ['responsive'],
    wordBreak: ['responsive'],
    zIndex: ['responsive'],

  animations: ['responsive, hover'],
  animationDuration: ['responsive, hover'],
  animationTimingFunction: ['responsive, hover'],
  animationDelay: ['responsive, hover'],
  animationIterationCount: ['responsive, hover'],
  animationDirection: ['responsive, hover'],
  animationFillMode: ['responsive, hover'],
  animationPlayState: ['responsive, hover'],
  transitionProperty: ['responsive,'],
  transitionDuration: ['responsive'],
  transitionTimingFunction: ['responsive'],
  transitionDelay: ['responsive'],
  willChange: ['responsive'],

},
  plugins: [
    require('tailwindcss-animations')(),
    require('tailwindcss-transitions')(),
  ]
}
