# ✅ Plan de développement - Inventory Manager SmartInventor-MG

## Use TDD with lirewire

## 🚧 Phase 1 — MVP fonctionnel

**Objectif :** livrer une base utilisable rapidement.

- [x] Authentification via Laravel Breeze ou Jetstream  
- [x] CRUD : Produits, Fournisseurs, Catégories  
- [ ] Stock actuel par produit  
- [ ] Mouvements d’inventaire (entrées/sorties)  
- [ ] Alertes de stock bas simples  
- [ ] Dashboard de base (niveaux de stock, alertes)  

---

## 🧱 Phase 2 — Structure et architecture avancée

- [ ] Modularisation (ex: `Modules/Inventory`, `Modules/Products`)  
- [ ] DDD light (Value Objects pour `Quantity`, `Unit`, etc.)  
- [ ] Abstraction du stock (gestion multi-entrepôts)  
- [ ] Repository pattern, Services, DTOs  

---

## 🔗 Phase 3 — API & intégration

- [ ] API RESTful complète (Sanctum + tests Postman)  
- [ ] Swagger/OpenAPI ou Laravel API Docs  
- [ ] (Optionnel) API GraphQL avec Lighthouse  

---

## 📦 Phase 4 — Fonctionnalités avancées

- [ ] Multi-entrepôts  
- [ ] Gestion des unités et conversions  
- [ ] Documents PDF (bons de réception, sortie)  
- [ ] Rôles & permissions (Spatie Permissions)  
- [ ] Notifications email/web  

---

## 📊 Phase 5 — Analytics & performance

- [ ] Dashboard avancé (Chart.js / ECharts)  
- [ ] Historique des mouvements filtrable  
- [ ] Requêtes lentes monitorées  
- [ ] Jobs en file (ex: import Excel/CSV en async)  

---

## 🧪 Phase 6 — Tests, CI, packaging

- [ ] Tests unitaires et fonctionnels avec Pest ou PHPUnit  
- [ ] GitHub Actions : tests, lint, déploiement  
- [ ] Docker-compose pour dev rapide  
- [ ] Support multi-env (`.env`, `.env.testing`, etc.)  
