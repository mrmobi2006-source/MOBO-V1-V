# إعداد البوت على Railway

## الخطوات:

### 1️⃣ **إنشاء قاعدة البيانات على Railway**
- اذهب إلى [railway.app](https://railway.app)
- أنشئ database جديد (MySQL)
- احصل على بيانات الاتصال

### 2️⃣ **نشر الكود**
- ربط المستودع مع Railway
- سيتم التثبيت تلقائياً

### 3️⃣ **إضافة متغيرات البيئة (Environment Variables)**

في لوحة Railway، أضف المتغيرات التالية:

```
BOT_TOKEN=رقم_التوكن_الخاص_بك
ADMIN_ID=معرف_المسؤول
LOGS_ID=معرف_قناة_السجلات
DB_HOST=hostname_من_قاعدة_البيانات
DB_USER=اسم_المستخدم
DB_PASS=كلمة_المرور
DB_NAME=اسم_قاعدة_البيانات
DB_PORT=3306
TIMEZONE=Asia/Kolkata
```

### 4️⃣ **استيراد قاعدة البيانات**
```bash
mysql -h DB_HOST -u DB_USER -p DB_NAME < checkerbot.sql
```

### 5️⃣ **تعيين Webhook للبوت**

بعد نشر التطبيق على Railway، ستحصل على رابط مثل:
```
https://your-project-name.up.railway.app
```

اذهب إلى:
```
https://api.telegram.org/botTOKEN/setWebhook?url=https://your-project-name.up.railway.app/index.php
```

### 6️⃣ **التحقق من الاتصال**

```bash
curl https://api.telegram.org/botTOKEN/getWebhookInfo
```

### 🔧 **استكشاف الأخطاء**

1. **تحقق من السجلات**: في لوحة Railway
2. **تحقق من متغيرات البيئة**: تأكد من إضافتها بشكل صحيح
3. **اختبر قاعدة البيانات**: تأكد من الاتصال

