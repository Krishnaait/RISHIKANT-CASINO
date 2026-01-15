# 🚀 Deployment Guide - Railway

This guide will help you deploy the **RISHIKANT CASINO** website on Railway.

## 📋 Prerequisites

- GitHub account (already connected)
- Railway account ([railway.app](https://railway.app))
- Repository: `https://github.com/Krishnaait/RISHIKANT-CASINO`

## 🎯 Railway Deployment Steps

### Step 1: Access Railway Dashboard

1. Go to [railway.app](https://railway.app)
2. Sign in with your GitHub account
3. Click **"New Project"**

### Step 2: Connect GitHub Repository

1. Select **"Deploy from GitHub repo"**
2. Choose **"Krishnaait/RISHIKANT-CASINO"** from the list
3. Click **"Deploy Now"**

### Step 3: Configure Project Settings

Railway will auto-detect PHP. Configure the following:

#### Root Directory
- Set root directory to: `/public`
- This ensures Railway serves from the public folder

#### Build Settings
- **Build Command:** (Leave empty - no build needed)
- **Start Command:** (Leave empty - Railway auto-detects PHP)

#### Environment Variables
No environment variables needed! This is a 100% free platform with no external dependencies.

### Step 4: Deploy

1. Railway will automatically deploy your application
2. Wait for the build to complete (usually 2-3 minutes)
3. Once deployed, Railway will provide a public URL

### Step 5: Access Your Website

Your website will be available at:
```
https://[your-project-name].up.railway.app
```

## ⚙️ Configuration Files

### Create `railway.json` (Optional)

If you need custom configuration, create this file in the root directory:

```json
{
  "build": {
    "builder": "NIXPACKS"
  },
  "deploy": {
    "startCommand": "php -S 0.0.0.0:$PORT -t public",
    "restartPolicyType": "ON_FAILURE",
    "restartPolicyMaxRetries": 10
  }
}
```

### Create `nixpacks.toml` (Optional)

For advanced PHP configuration:

```toml
[phases.setup]
nixPkgs = ["php81", "php81Packages.composer"]

[phases.install]
cmds = ["echo 'No dependencies to install'"]

[start]
cmd = "php -S 0.0.0.0:$PORT -t public"
```

## 🔧 Troubleshooting

### Issue: 404 Error on All Pages

**Solution:** Ensure root directory is set to `/public`

1. Go to Railway project settings
2. Navigate to **"Service Settings"**
3. Set **"Root Directory"** to `/public`
4. Redeploy

### Issue: PHP Version Error

**Solution:** Railway uses PHP 8.1+ by default. Our code is compatible.

If you need to specify PHP version, add to `composer.json`:

```json
{
  "require": {
    "php": ">=8.1"
  }
}
```

### Issue: Assets Not Loading

**Solution:** Check asset paths in your code

All asset paths should be relative:
- ✅ `/assets/css/global.css`
- ✅ `../assets/images/hero-banner.webp`
- ❌ `http://localhost:8000/assets/...`

## 📊 Post-Deployment Checklist

After deployment, verify:

- [ ] Homepage loads correctly
- [ ] All 10 static pages are accessible
- [ ] All 4 games work properly
- [ ] Images load correctly
- [ ] CSS styling is applied
- [ ] JavaScript functionality works
- [ ] Navigation links work
- [ ] Footer links work
- [ ] Age gate modal appears
- [ ] Responsive design works on mobile

## 🔗 Important URLs to Test

After deployment, test these URLs:

```
https://[your-domain].up.railway.app/
https://[your-domain].up.railway.app/games.php
https://[your-domain].up.railway.app/about.php
https://[your-domain].up.railway.app/contact.php
https://[your-domain].up.railway.app/terms.php
https://[your-domain].up.railway.app/privacy.php
https://[your-domain].up.railway.app/disclaimer.php
https://[your-domain].up.railway.app/fair-policy.php
https://[your-domain].up.railway.app/responsible-gaming.php
https://[your-domain].up.railway.app/community-rules.php
https://[your-domain].up.railway.app/support.php
https://[your-domain].up.railway.app/games/chicken.php
https://[your-domain].up.railway.app/games/dice.php
https://[your-domain].up.railway.app/games/mines.php
https://[your-domain].up.railway.app/games/plinko.php
```

## 🎨 Custom Domain (Optional)

To add a custom domain:

1. Go to Railway project settings
2. Click **"Domains"**
3. Click **"Add Domain"**
4. Enter your custom domain
5. Update your DNS records as instructed

## 📈 Monitoring & Logs

To view logs:

1. Go to your Railway project
2. Click **"Deployments"**
3. Select the active deployment
4. View **"Logs"** tab

## 💰 Pricing

Railway offers:
- **Free Tier:** $5 credit per month (sufficient for this project)
- **Pro Plan:** $20/month for unlimited usage

This project is lightweight and should work fine on the free tier.

## 🔄 Updates & Redeployment

To update your website:

1. Make changes locally
2. Commit to GitHub:
   ```bash
   git add .
   git commit -m "Your update message"
   git push origin master
   ```
3. Railway will automatically redeploy

## 📞 Support

If you encounter issues:

- **Railway Docs:** [docs.railway.app](https://docs.railway.app)
- **Railway Discord:** [discord.gg/railway](https://discord.gg/railway)
- **GitHub Issues:** Create an issue in your repository

## ✅ Success Indicators

Your deployment is successful when:

1. ✅ Website loads without errors
2. ✅ All pages are accessible
3. ✅ Games are playable
4. ✅ Images display correctly
5. ✅ CSS styling works
6. ✅ Navigation functions properly
7. ✅ Mobile responsive design works

---

**🎉 Congratulations!** Your social casino website is now live on Railway!

**© 2026 Rishikant Casino Entertainment Pvt. Ltd.**
