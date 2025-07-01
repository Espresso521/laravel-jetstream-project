本プロジェクトは **Laravel + Breeze + React + Vite** をベースに構築した SPA (Single Page Application) 開発環境です。  
Docker により、チーム全員が簡単に同一環境で開発可能です 🚀。

---

## 📦 使用技術・バージョン

| コンポーネント | バージョン |
|----------------|------------|
| PHP            | 8.2.x      |
| Laravel Framework | 10.48.29 |
| Laravel Breeze | v1.29.1    |
| React          | 18.3.1     |
| Tailwind CSS   | 3.4.17     |
| Vite           | 5.4.19     |
| Node.js        | 18.x       |
| MySQL          | 8.0.x      |
| Docker / Docker Compose | 最新版 (2025年6月時点) |

---

## 🌐 ブランチ構成

- `main` ブランチ：Laravel + Jetstream + Inertia + Vue3 版
- `feature/breeze` ブランチ：Laravel + Breeze + Vite + React 版（こちらをメイン開発に使用予定）

---

## 🚀 開発環境構築手順

1️⃣ リポジトリを clone  
2️⃣ `.env` ファイルを設定（例: `.env.example` をコピー）  
3️⃣ Docker コンテナを起動：
```bash
docker compose up -d
```

4️⃣ コンテナ内で必要なセットアップ：
```bash
docker compose exec app bash
composer install
php artisan migrate
php artisan serve --host=0.0.0.0 --port=8000

docker compose exec node bash
npm install
npm run dev
```
5️⃣ ブラウザで確認：
http://localhost:8000

✨ 効果イメージ： 
---

<img width="720" alt="截屏2025-06-03 20 01 31" src="https://github.com/user-attachments/assets/9dd72f73-21b8-4a75-af41-9eb6fa84bdd0" />

<img width="720" alt="截屏2025-06-03 20 44 33" src="https://github.com/user-attachments/assets/26a7f922-d1ef-49d0-99d8-64191848b734" />

<img width="720" alt="截屏2025-06-04 12 01 51" src="https://github.com/user-attachments/assets/36318a89-da6f-46ff-9f21-6ac113f86bbc" />

<img width="720" alt="截屏2025-06-04 11 59 04" src="https://github.com/user-attachments/assets/2c25d6b8-bad0-40fe-98b1-8d45f53a30e4" />


