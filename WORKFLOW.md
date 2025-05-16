# دليل إدارة مشروع OBD Codes على GitHub

## 1. استنساخ المشروع لأول مرة
```bash
git clone https://github.com/eyadalalimi2/obdcodes.git
cd obdcodes

2. تحديث المشروع لجلب آخر التغييرات

git pull

3. تنفيذ التعديلات

عدل أي ملفات أو أضف ميزات جديدة أو أصلح الأخطاء.


4. فحص التغييرات

git status

5. إضافة التغييرات

git add .

6. إنشاء وصف للتعديل

git commit -m "وصف مختصر لما تم تعديله أو إضافته"

7. رفع التغييرات إلى GitHub

git push

8. في حالة ظهور تعارض (Conflict)

افتح الملفات المتعارضة.

احذف علامات التعارض واحفظ التغييرات.

ثم نفذ:

git add .
git commit -m "حل التعارضات"
git push


9. التحقق من التزامن قبل أي تعديل جديد

git pull


---

تنبيهات مهمة

لا تقم برفع ملف .env أو مجلد vendor أو node_modules.

استخدم git status دائمًا قبل commit و push.

لا تستخدم --force إلا إذا كنت متأكدًا مما تفعل.



---

رابط المشروع الرسمي

https://github.com/eyadalalimi2/obdcodes

---
