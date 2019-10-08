module.exports = {
    theme: {
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
        extend: {
            colors: {
                'blue-light': '#e0f4f4',
                'blue-normal': '#5DBCD2',
                'blue-main': '#298A96',
                'blue-heading': '#0B6A80',
            },
            borderRadius: {
                'large': '12px',
            },
            boxShadow: {
                'blue': '0 20px 25px -5px rgba(220, 246, 255, 0.51), 0 10px 10px -5px rgb(220, 246, 255)',
                'blue-lg': '0 10px 15px -3px rgb(220, 246, 255), 0 4px 6px -2px rgb(220, 246, 255)'
            }
        }
    },
    variants: {
        transitionProperty: ['responsive'],
        transitionDuration: ['responsive'],
        transitionTimingFunction: ['responsive'],
        transitionDelay: ['responsive'],
        willChange: ['responsive'],
    },
    plugins: [
        require('tailwindcss-transitions')(),
    ]
}
