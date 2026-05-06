# MOBO-V1-V Bot - Railway Deployment Guide

## ✅ تم إصلاح المشروع للعمل على Railway

### 🔧 التحسينات المضافة:

1. **index.php** - نقطة دخول Webhook
2. **Procfile** - تعليمات التشغيل
3. **railway.json** - إعدادات Railway
4. **config/config.php** - دعم متغيرات البيئة
5. **config/variables.php** - معالجة آمنة للبيانات الفارغة
6. **functions/db.php** - حماية من SQL Injection

---

## 📋 خطوات التثبيت:

### 1️⃣ إضافة متغيرات البيئة على Railway

في Railway Dashboard، اذهب إلى **Variables** وأضف:

```
BOT_TOKEN = توكن_البوت_الخاص_بك
ADMIN_ID = معرفك_الرقمي
LOGS_ID = -معرف_قناة_السجلات
DB_HOST = قاعدة_البيانات.up.railway.app
DB_USER = root
DB_PASS = كلمة_المرور
DB_NAME = railway
DB_PORT = 3306
TIMEZONE = Asia/Kolkata
```

### 2️⃣ استيراد قاعدة البيانات

1. انسخ محتوى `checkerbot.sql`
2. اذهب إلى قاعدة البيانات Railway وأستورد الملف
3. أو استخدم PHPMyAdmin

### 3️⃣ تعيين Webhook

بعد النشر مباشرة، استخدم هذا الأمر:

```
https://api.telegram.org/bot<YOUR_TOKEN>/setWebhook?url=https://your-railway-url.up.railway.app/index.php
```

### 4️⃣ التحقق من الاتصال

```
https://api.telegram.org/bot<YOUR_TOKEN>/getWebhookInfo
```

---

## 🔑 الخطوات المهمة:

✅ تأكد من صحة جميع متغيرات البيئة  
✅ تأكد من استيراد قاعدة البيانات بنجاح  
✅ استخدم `/setWebhook` بعد النشر مباشرة  
✅ الانتظر 5-10 دقائق حتى يعمل الـ Webhook بشكل كامل

---

## 🐛 استكشاف الأخطاء:

**المشكلة:** البوت لا يرد على الرسائل

**الحل:**
1. تحقق من سجلات Railway Logs
2. تأكد من صحة BOT_TOKEN
3. تأكد من تعيين Webhook بشكل صحيح
4. تحقق من اتصال قاعدة البيانات

---

## 📞 الدعم

إذا كان لديك مشكلة:
1. افحص السجلات في Railway Dashboard
2. تحقق من جميع متغيرات البيئة
3. اختبر الاتصال بقاعدة البيانات
4. أعد تعيين Webhook

**الآن البوت يجب أن يعمل بشكل مثالي! 🚀**
