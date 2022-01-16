<?php include_once 'include/header.php'; ?>

<body >
  <?php include_once 'include/menu.php'; ?>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/poshtibani.css">


<div class="container-fluid">
  <div class="container pt6">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">تماس با ما</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">درخواست بازگشت اعتبار</button>
      </li>
      <li class="nav-item link" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">ثبت مشکل یا طرح پرسش</button>
      </li>
    </ul>
    <div class="tab-content  d-flex justify-content-center" id="myTabContent">
      <div class="tab-pane fade show active mb-5" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center ">
            <div class="col-12 col-md-6">
              <select class="select ">
                <option value="تهران">تهران</option>
                <option value="کرج">کرج</option>
                <option value="مشهد">مشهد</option>
                <option value="اصفهان">اصفهان</option>
                <option value="شیراز">شیراز</option>
                <option value="ارومیه">ارومیه</option>
                <option value="لاهیجان">لاهیجان</option>
                <option value="رشت">رشت</option>
                <option value="انزلی">انزلی</option>
                <option value="تبریز">تبریز</option>
                <option value="ساری">ساری</option>
                <option value="یزد">یزد</option>
                <option value="کرمان">کرمان</option>
                <option value="قم">قم</option>
                <option value="اهواز">اهواز</option>
                <option value="بابل">بابل</option>
                <option value="قائم‌شهر">قائم‌شهر</option>
                <option value="آمل">آمل</option>
              </select>

              <div class="map">
                <iframe class="w-75" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.4846856988916!2d51.373194615203055!3d35.788032731714715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e07e1657fd827%3A0x271f4af54e3d045b!2sTapsi%20Co.!5e0!3m2!1sen!2s!4v1610196691132!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>

              </div>
            
              <div class="d-flex justify-content-start mb-3">
                <span class="title">شماره تماس:</span>
                <span class="ms-3">1630</span>
              </div>

              <div class="d-flex justify-content-start mb-3">
                <span class="title">آدرس:</span>
                <span class="ms-3">تهران، سعادت‌آباد، بالاتر از میدان کاج، بلوار بهزاد، نبش کوچه باغستان یکم، پلاک ۲. کد پستی: ۱۹۹۸۶۳۵۸۲۰</span>
              </div>
            
            </div>

            <div class="col-12 col-md-6">
              <div class="information">
                    <div class="info d-flex justify-content-around mb-5">
                      <div class="d-flex">
                        <img src="https://tapsi.ir/images/contact/phone.svg" alt="phone" class="w-25 me-2">
                        <div class="title">شماره تماس با پشتیبانی:</div>
                      </div>
                       
                        <div class="value english">
                            <a href="tel: 1630">1630</a>
                        </div>
                    </div>

                    <div class="info d-flex justify-content-around mb-5">
                        <div class="d-flex">
                          <img src="images/print.svg" alt="print" class="w-25 me-2">
                          <div class="title">شماره فکس:</div>
                        </div>
                       
                       
                        <div class="value english">
                            <a href="http://fax:+982141630680">+98 (21) 41630680</a>
                        </div>
                    </div>

                    <div class="info d-flex justify-content-around mb-5">
                        <div class="d-flex">
                          <img src="images/mail.svg" alt="mail" class="w-25 me-2">
                          <div class="title">پست الکترونیکی:</div>
                        </div>
                       
                       
                        <div class="value english">
                            <a href="mailto:info@tapsi.cab">info@tapsi.cab</a>
                        </div>
                    </div>
              </div>
            </div>

        </div>
        

      </div>



      <div class="tab-pane fade widthTab" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
        <div class="d-flex flex-column justify-content-center pt6">
          <input type="text" class="mb-3 " placeholder="نام و نام خانوادگی">

          <input type="tel" class=" mb-3" placeholder="شماره تماس">

          <input type="email" class="mb-3" placeholder="ایمیل">

          <input type="text" class=" mb-3" placeholder="شماره ملی">

          <input type="text" class=" mb-3" placeholder="شماره کارت">

          <input type="text" class="mb-5" placeholder="مبلغ به تومان">

          <button type="submit" class="btnorange p-2 mb-5">ارسال</button>
        </div>
      </div>




      <div class="tab-pane fade widthTab" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="d-flex flex-column justify-content-center pt6">
          <input type="text" class="mb-3 w-100" placeholder="نام و نام خانوادگی">

          <input type="tel" class=" mb-3 w-100" placeholder="شماره تماس">

          <input type="email" class="mb-3 w-100" placeholder="ایمیل">

         <textarea rows="4"  class="mb-5 w-100"> متن پیام</textarea>

          <button type="submit" class="btnorange p-2 mb-5">ارسال</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once 'include/footer.php'; ?>