module.exports = {
    development: {
      root: require('path').normalize(__dirname + '/..'),
      app: {
        name: 'Nodejs Express Mongoose Demo'
      },
      db: 'mongodb://localhost/blog'
    }
  , test: {

    }
  , production: {

    }
}
