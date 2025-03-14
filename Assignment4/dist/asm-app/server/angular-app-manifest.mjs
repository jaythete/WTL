
export default {
  bootstrap: () => import('./main.server.mjs').then(m => m.default),
  inlineCriticalCss: true,
  baseHref: '/',
  locale: undefined,
  routes: [
  {
    "renderMode": 2,
    "route": "/"
  },
  {
    "renderMode": 2,
    "route": "/login"
  },
  {
    "renderMode": 2,
    "route": "/registration"
  }
],
  entryPointToBrowserMapping: undefined,
  assets: {
    'index.csr.html': {size: 490, hash: '598b4ee45c89f858c8f5326022e350feae2ebd18d4233a81b1690bbc022c77e7', text: () => import('./assets-chunks/index_csr_html.mjs').then(m => m.default)},
    'index.server.html': {size: 1003, hash: '4ad8fe6c99aa1204696e801fdb7d799df127dbc8070d19e59aab71328a5f0f92', text: () => import('./assets-chunks/index_server_html.mjs').then(m => m.default)},
    'index.html': {size: 2304, hash: '8e4bd4679ae3ead965be4130358556791abeac7648b7cac2cf9432f2b9397ebd', text: () => import('./assets-chunks/index_html.mjs').then(m => m.default)},
    'registration/index.html': {size: 4443, hash: '3ee963523215056a033fec13a9c50dad07134154a99a6706f760b3fa2dcabd01', text: () => import('./assets-chunks/registration_index_html.mjs').then(m => m.default)},
    'login/index.html': {size: 2831, hash: '54319821a7e16b07112cc97f99cab7538f67a9e47257cfd0c90f581e33b4bc05', text: () => import('./assets-chunks/login_index_html.mjs').then(m => m.default)},
    'styles-5INURTSO.css': {size: 0, hash: 'menYUTfbRu8', text: () => import('./assets-chunks/styles-5INURTSO_css.mjs').then(m => m.default)}
  },
};
