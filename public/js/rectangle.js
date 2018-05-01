const rect = new mojs.Shape({
    shape:        'rect',
    left:         '20%',
    fill:         'none',
    radius:       20,
    stroke:       { 'rgba(0,255,255, 1)' : 'magenta' },
    strokeWidth:  { 10: 0 },
    strokeDasharray: '100%',
    strokeDashoffset: { '-100%' : '100%' },
    angle:        { 0: 180 },

    duration:     2000,
    repeat:       999,
}).play();