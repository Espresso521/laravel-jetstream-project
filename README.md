# Laravel + Breeze + React 開発環境

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
npm install
npm run dev
```
5️⃣ ブラウザで確認：
http://localhost:8000
