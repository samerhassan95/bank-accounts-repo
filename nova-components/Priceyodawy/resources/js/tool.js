Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'priceyodawy',
      path: '/priceyodawy',
      component: require('./components/Tool'),
    },
  ])
})
