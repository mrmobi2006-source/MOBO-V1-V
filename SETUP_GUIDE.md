📋 **تثبيت البوت على Railway - Bot Installation Guide**

## 🚀 خطوات التثبيت السريعة (Quick Setup)

### 1️⃣ إضافة متغيرات البيئة على Railway

في لوحة تحكم Railway، اذهب إلى **Variables** وأضف التالي:

```
BOT_TOKEN = رقم_التوكن_الخاص_بك
ADMIN_ID = معرفك_الرقمي
LOGS_ID = معرف_قناة_السجلات
DB_HOST = قاعدة_البيانات.up.railway.app
DB_USER = root
DB_PASS = كلمة_المرور_الخاصة_بك
DB_NAME = اسم_قاعدة_البيانات
DB_PORT = 3306
```

### 2️⃣ تعيين Webhook للبوت

بعد نشر المشروع على Railway، استخدم هذا الأمر:

```bash
https://api.telegram.org/botTOKEN/setWebhook?url=https://your-project.up.railway.app/index.php
```

**استبدل:**
- `TOKEN` برقم التوكن الخاص بك
- `your-project` باسم مشروعك على Railway

### 3️⃣ التحقق من الاتصال

```bash
https://api.telegram.org/botTOKEN/getWebhookInfo
```

## 📊 المتطلبات

✅ توكن Telegram من [@BotFather](https://t.me/BotFather)  
✅ معرف المسؤول من [@username_to_id_bot](https://t.me/username_to_id_bot)  
✅ قاعدة بيانات MySQL على Railway  
✅ استيراد `checkerbot.sql` إلى قاعدة البيانات  

## 🔧 الملفات الجديدة

- **index.php** - نقطة دخول Webhook الرئيسية
- **Procfile** - تكوين Heroku/Railway
- **railway.json** - إعدادات Railway المتقدمة

## 🛠 المشاكل الشائعة والحلول

### البوت لا يستقبل الرسائل؟

✅ تأكد من تعيين Webhook بشكل صحيح  
✅ تحقق من متغيرات البيئة في Railway  
✅ تحقق من السجلات: `journalctl -u railway -f`  
✅ تأكد من أن قاعدة البيانات متصلة  

### خطأ في الاتصال بقاعدة البيانات؟

✅ تحقق من بيانات الاتصال (Host, User, Password)  
✅ استيمر قاعدة البيانات من Railway dashboard  
✅ استيرد ملف `checkerbot.sql`  

### الأوامر لا تعمل؟

✅ تحقق من أن المسارات صحيحة  
✅ تأكد من تحميل جميع الـ modules في `main.php`  
✅ تحقق من السجلات للأخطاء  

## 📝 ملاحظات مهمة

- البوت يستخدم **Webhook** وليس polling (أسرع وأكثر كفاءة)
- البيانات الحساسة **لا تُحفظ** في ملفات `.php`
- استخدم متغيرات البيئة لجميع البيانات الحساسة

---

**تم إصلاح المشروع بنجاح! 🎉**

