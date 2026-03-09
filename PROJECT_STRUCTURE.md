# MarketCity

## Project Structure for Crypto and Gift Card Exchange Platform

### Backend
- /backend
  - /src
    - /controllers
      - AuthController.js
      - UserController.js
      - ExchangeController.js
    - /models
      - User.js
      - GiftCard.js
      - Transaction.js
    - /routes
      - authRoutes.js
      - userRoutes.js
      - exchangeRoutes.js
    - /middleware
      - authMiddleware.js
    - /config
      - db.js
      - server.js
    - index.js
  - /tests
  - package.json
  - .env

### Frontend
- /frontend
  - /src
    - /components
      - Header.js
      - Footer.js
      - CardList.js
      - TransactionHistory.js
    - /pages
      - HomePage.js
      - LoginPage.js
      - RegisterPage.js
      - ExchangePage.js
    - /services
      - apiService.js
    - App.js
    - index.js
  - /public
  - package.json
  - .env

### Database
- /database
  - /migrations
  - /seeds
- database.sql

### Documentation
- README.md
- API_Documentation.md

### Additional Files
- .gitignore
- docker-compose.yml
- Dockerfile
- LICENSE