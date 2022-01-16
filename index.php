<?php include_once 'include/header.php'; ?>
<body onload="slidshow()">
<?php include_once 'include/menu.php'; ?>

<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/mediaQuerys/index.css">

  

    <!--header-->
    <div class="container-fluid bgHeader">
      <div
        class="bgdiv text-white justify-content-center justify-content-md-end"
      >
        <h1 class="text-start fw-bold">تپسی</h1>
        <p class="fsexplain">اپلیکیشن درخواست خودرو و پیک</p>

        <div
          class="
            d-block d-md-flex
            justify-content-center justify-content-md-around
            p-2
          "
        >
          <a
            href="#"
            class="btnwhite nav-link w-100 p-3 text-dark text-center m-1"
            ><i class="fas fa-arrow-down"></i> دانلود اپلیکیشن مسافران</a
          >
          <a
            href="#"
            class="btnwhite nav-link w-100 p-3 text-dark text-center m-1"
            ><i class="fas fa-arrow-down"></i>وب اپلیکیشن مسافران</a
          >
        </div>
        <div
          class="
            p-2
            d-block d-md-flex
            justify-content-center justify-content-md-around
          "
        >
          <a
            href="#"
            class="
              btnoutlinewhite
              nav-link
              w-100
              p-3
              m-1
              text-white text-center
            "
            ><i class="fas fa-arrow-down"></i> دانلود اپلیکیشن رانندگان</a
          >
          <a
            href="#"
            class="
              btnoutlinewhite
              nav-link
              w-100
              p-3
              m-1
              text-white text-center
            "
            ><i class="fas fa-car"></i> ثبت نام رانندگان</a
          >
        </div>
      </div>

      <img
        src="./images/mockup-phone.webp"
        class="imgPhone d-none d-lg-block position-absolute"
        alt=""
        srcset=""
      />
    </div>


    <!--section one-->
    <div class="container pTopSectionOne">
      <h2 class="fw-bold">سرویس های تپسی</h2>
      <div class="slideshow">

        <div class="d-flex justify-content-md-center align-items-center mt-5 pointer divscroll">
          <a href="#" id="item1" class="service active" >
            <img src="./images/cc-classic.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">تپسی کلاسیک</p>
          </a>

          <a href="#" id="item2" class="service">
            <img src="./images/cc-motopeyk.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">موتوپیک</p>
          </a>

          <a href="#" id="item3" class="service">
            <img src="./images/cc-autopeyk.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">اتو پیک</p>
          </a>

          <a href="#" id="item4" class="service">
            <img src="./images/cc-plus.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">تپسی پلاس</p>
          </a>

          <a href="#" id="item5" class="service">
            <img src="./images/cc-tel.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">تپسی‌تلفنی</p>
          </a>

          <a href="#" id="item6" class="service">
            <img src="./images/cc-hamyar.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">همیار</p>
          </a>

          <a href="#" id="item7" class="service">
            <img src="./images/cc-hamkhat.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">هم خط</p>
          </a>

          <a href="#" id="item8" class="service">
            <img src="./images/cc-taxi.png"   class="w-100" alt="" srcset="" />
            <p class="mt-2">تاکسی</p>
          </a>

          <a href="#" id="item9" class="service">
            <img src="./images/cc-line.png" class="w-100" alt="" srcset="" />
            <p class="mt-2">تپسی لاین</p>
          </a>
        </div>


        <div class="slides">

          <div id="dic1" class="slide active">
             <!--1-->
              <div class="d-flex justify-content-center mt-3 ">
                <div class="col-12 col-md-6 mt-4">
                  <h3>تپسی کلاسیک</h3>
                  <p class="justifyText mt-4">
                    با سرویس کلاسیک تپسی، یک خودروی اختصاصی برای رسیدن به مقصدتان دارید.
                    تپسی کلاسیک، راهی سریع و آسان برای سفرهای درون‌شهری در هر ساعتی از روز
                    است. در این سرویس، شما امکان تعیین دو یا چند مقصد و همچنین توقف در مسیر
                    را دارید.
                  </p>
                </div>
                <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
                  <img src="./images/illus-classic.webp" class="w-100" alt="" />
                </div>
              </div>
            
          </div>


          <div id="dic2" class="slide">
              <!--2-->
            <div class="d-flex justify-content-center mt-3 ">
              <div class="col-12 col-md-6 mt-4">
                <h3>موتوپیک</h3>
                <p class="justifyText mt-4">
                  با استفاده از سرویس موتوپیک، بسته‌ها و مرسولاتتان با پیک موتور به مقصد
                  ارسال می‌شوند. این سرویس مناسب زمانی است که می‌خواهید مرسوله سریع‌تر به
                  مقصد برسد. در این سرویس، شما می‌توانید مسیر رسیدن مرسوله‌تان به مقصد را
                  به صورت لحظه‌ای روی نقشه دنبال کنید.
                </p>
              </div>
              <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
                <img src="./images/illus-motopeyk.webp" class="w-100" alt="" />
              </div>
            </div>
            
          </div>


          <div id="dic3" class="slide">
             
            <!--3-->
            <div class="d-flex justify-content-center mt-3 ">
              <div class="col-12 col-md-6 mt-4">
                <h3 >اتوپیک</h3>
                <p class="justifyText mt-4">
                  اتوپیک سرویسی برای ارسال بسته‌های شما با خودرو است. این سرویس، برای
                  زمانی مناسب است که بسته‌های شما، با موتور قابل ارسال نیستند و یا در حین
                  جابجایی، نیاز به مراقبت بیشتری دارند. در این سرویس نیز امکان رصد لحظه
                  ‌به لحظه موقعیت مکانی مرسوله تا زمان رسیدن به مقصد فراهم است.
                </p>
              </div>
              <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
                <img src="./images/illus-autopeyk.webp" class="w-100" alt="" />
              </div>
            </div>

            
          </div>


          <div id="dic4" class="slide">
           <!--4-->
           <div class="d-flex justify-content-center mt-3 ">
            <div class="col-12 col-md-6 mt-4">
              <h3>تپسی پلاس</h3>
              <p class="justifyText mt-4">
                در سرویس پلاس تاکسی اینترنتی تپسی، خودرویی با مدل بالاتر و عمر کمتر، به
                دنبال شما خواهد آمد. همچنین، رانندگان این سرویس بالاترین امتیاز را از
                مسافران دریافت کرده‌اند. در این سرویس که در حال حاضر در تهران فعال است،
                امکان تعیین چند مقصد یا توقف در حین سفر، وجود دارد.
              </p>
            </div>
            <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
              <img src="./images/illus-plus.webp" class="w-100" alt="" />
            </div>
          </div>
        </div>


        <div id="dic5" class="slide">
            <!--5-->
  <div class="d-flex justify-content-center mt-3">
    <div class="col-12 col-md-6 mt-4">
      <h3 >تپسی تلفنی</h3>
      <p class="justifyText mt-4">
        سرویس تپسی تلفنی یا ۱۶۳۰، این امکان را به شما می‌دهد که بدون نیاز به
        اینترنت و اپلیکیشن، درخواست خودرو بدهید. این سرویس تاکسی تلفنی مناسب
        زمانی است که به هر دلیلی دسترسی به اینترنت یا اپلیکیشن ندارید. همچنین
        سرویس تلفنی تپسی، راه حلی مناسب برای افرادی است که کار کردن با
        اپلیکیشن‌های موبایلی برایشان راحت نیست.
      </p>
    </div>
    <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
      <img src="./images/illus-tel.webp" class="w-100" alt="" />
    </div>
  </div>

        </div>


        <div id="dic6" class="slide">
             <!--6-->
  <div class="d-flex justify-content-center mt-3">
    <div class="col-12 col-md-6 mt-4">
      <h3>همیار</h3>
      <p class="justifyText mt-4">
        سرویس همیار تپسی، به جای شما خرید می‌کند. کافیست فروشگاه مورد نظر خود را
        به عنوان مبدا مشخص کرده و لیست خریدتان را داخل اپ وارد کنید. این خرید‌ها
        می‌تواند از سوپرمارکت یا داروخانه مورد نظر شما باشند.
      </p>
    </div>
    <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
      <img src="./images/illus-hamyar.webp" class="w-100" alt="" />
    </div>
  </div>

        </div>


        
        <div id="dic7" class="slide">
          <!--7-->
  <div class="d-flex justify-content-center mt-3 ">
    <div class="col-12 col-md-6 mt-4">
      <h3 >هم‌خط</h3>
      <p class="justifyText mt-4">
        سرویس هم‌خط تپسی شما را با مینی‌بوس‌ به مقصد می‌رساند. با استفاده از
        سرویس هم‌خط بعد از انتخاب مسیر سفر، بلیت‌تان را خریداری کنید و سریع‌تر و
        راحت‌تر به مقصد برسید. این سرویس خطی بسیار ارزان‌تر از دیگر سرویس‌های
        تپسی است و شما را سریع‌تر و راحت‌تر از حمل‌ونقل عمومی به مقصدتان
        می‌رساند. شما می‌توانید از قبل بلیت هم خط را رزرو کنید و با رعایت فاصله
        اجتماعی به مقصد برسید. سرویس مینی بوس آنلاین فعلا فقط در تهران فعال است.
      </p>
    </div>
    <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
      <img src="./images/illus-hamkhat.webp" class="w-100" alt="" />
    </div>
  </div>


        </div>




        <div id="dic8" class="slide">
        <!--8-->
  <div class="d-flex justify-content-center mt-3">
    <div class="col-12 col-md-6 mt-4">
      <h3>تپسی تاکسی</h3>
      <p class="justifyText mt-4">
        در سرویس تاکسی تپسی، تاکسی‌های زرد یا سبز شما را به مقصدتان می‌رسانند.
        این سرویس در حال حاضر در تهران فعال است و چنانچه به دلایلی مانند ورود به
        محدوده طرح ترافیک یا طرح آلودگی هوا، ترجیح بدهید از تاکسی برای
        رفت‌وآمدتان استفاده کنید، گزینه مناسبی خواهد بود.
      </p>
    </div>
    <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
      <img src="./images/illus-taxi.webp" class="w-100" alt="" />
    </div>
  </div>


        </div>



        <div id="dic9" class="slide">
         <!--9-->
  <div class="d-flex justify-content-center mt-3">
    <div class="col-12 col-md-6 mt-4">
      <h3 >تپسی لاین</h3>
      <p class="justifyText mt-4">
        تپسی لاین سرویسی است که امکان سفر اشتراکی را برایتان فراهم می‌کند. در
        این سرویس شما با مسافر دیگری که هم‌مسیرتان است، هم‌سفر خواهید بود و
        هزینه سفرتان تقسیم می‌شود. این سرویس در حال حاضر به دلیل شرایط همه‌گیری
        بیماری کرونا از دسترس خارج شده اما با بهبود شرایط می‌توانید از سرویس
        لاین استفاده کنید.
      </p>
    </div>
    <div class="col-12 col-md-6 d-none d-md-flex p-4 ms-5">
      <img src="./images/illus-line.webp" class="w-100" alt="" />
    </div>
  </div>
</div>

        </div>



      </div>
      
      

     

      <hr class="my-5" />
    </div>

    <!--section 2-->
    <div class="container-fluid">
      <div class="container mt6">
        <div
          class="d-flex flex-column-reverse flex-md-row justify-content-around"
        >
          <div class="col-12 col-md-6 mt-4 mt-md-0">
            <h2 class="fw-bold">خدمات تپسی ویژه کسب‌وکارها</h2>
            <p class="mt-4 justifyText">
              پنل سازمانی تپسی، یک سامانه تحت وب است که به سادگی امکان درخواست
              هم‌زمان تعداد نامحدودی خودرو و پیک را برای کسب‌وکارها و سازمان‌ها
              فراهم می‌کند. و با استفاده از آن می‌توانید ماموریت های درون‌شهری و
              ارسال کالاهای خود را به سادگی مدیریت کنید.
            </p>

            <a href="#" class="infoSazmani d-flex align-items-end mb-5"
              >اطلاعات بیشتر سرویس سازمانی &nbsp;<i
                class="fas fa-angle-left"
              ></i
            ></a>

            <a href="#" class="text-white btnorange p-3"
              >ورود و ثبت نام پنل سازمانی</a
            >
          </div>

          <div class="col-12 col-md-6">
            <img
              src="./images/i-mac.webp"
              class="w-100"
              alt=""
              srcset=""
            />
          </div>
        </div>

        <div
          class="d-flex flex-column flex-md-row justify-content-around mt6 pb-5"
        >
          <div class="col-12 col-md-6">
            <img
              src="./images/macbook.webp"
              class="w-100 me-md-5 pe-md-5"
              alt=""
              srcset=""
            />
          </div>

          <div class="col-12 col-md-6 mt-4 mt-md-0">
            <h2 class="fw-bold">خرید کد اعتبار تپسی</h2>
            <p class="mt-4 justifyText mb-5">
              کاربران، کسب‌وکارها و سازمان‌ها می‌توانند به تعداد و مبلغ مورد
              نظرشان، کد اعتبار یا کد تخفیف تپسی تهیه کرده، برای خود، پرسنل و یا
              مشتریانشان استفاده کنند و از تخفیف‌های ویژه تپسی نیز بهره‌مند
              شوند.
              <br />
              این کدها امکان سفارشی‌سازی بر اساس مبدا، مقصد، زمان، درصد و مبلغ
              را دارند.
            </p>

            <a href="#" class="text-white btnorange p-3"
              >خرید کد اعتبار و تخفیف</a
            >
          </div>
        </div>
      </div>
    </div>

    <!--section paralex-->
    <div class="parallax" 
    >
      <div
        class="
          d-flex
          flex-column flex-md-row
          justify-content-center
          align-items-center
          pt7
        "
      >
        <div
          class="text-white fs-5 text-center mb-5 mb-md-0 paralextitle"
         id=""
        >
          <h5>بسته امنیت سفر</h5>
          <p class="fsexplainParalex" >
            امکانات ویژه امنیت سفر، شامل اشتراک سفر و پشتیبانی ۲۴ ساعته تیم
            متخصصین امنیت تپسی
          </p>
        </div>

        <div class="verticalLine d-none d-md-block"></div>

        <div class="text-white fs-5 text-center mb-5 mb-md-0 paralextitle">
          <h5>درخواست تلفنی</h5>
          <p class="fsexplainParalex">
            امکان درخواست خودرو بدون نیاز به اینترنت و اپلیکیشن، از طریق تماس با
            شماره ۱۶۳۰
          </p>
        </div>

        <div class="verticalLine d-none d-md-block"></div>

        <div class="text-white fs-5 text-center mb-5 mb-md-0 paralextitle">
          <h5>دسترس‌پذیری برای توان‌یابان</h5>
          <p class="fsexplainParalex">
            امکان استفاده کاربران نابینا و ناشنوا از اپلیکیشن تپسی و عدم کسر
            کمیسیون از سفر مسافران ویلچردار
          </p>
        </div>

        <div class="verticalLine  d-none d-md-block"></div>

        <div class="text-white fs-5 text-center paralextitle">
          <h5>امکانات هوشمند</h5>
          <p class="fsexplainParalex">
            سهولت استفاده از اپلیکیشن با پیشنهاد مبدا و مقصد سفر، مقاصد منتخب و
            پیشنهادهای ویژه شما
          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid mt6">
      <div class="container">
        <div class="row d-flex flex-md-row-reverse">
          <div class="col-12 col-md-6">
            <img
              src="./images/driver.webp"
              class="w-100 rounded-3"
              alt=""
              srcset=""
            />
          </div>

          <div class="col-12 col-md-6 mt-5 mt-md-0">
            <h1>مزایای تپسی برای رانندگان تاکسی اینترنتی</h1>
            <br />
            <h5>
              رانندگان (سفیران) به‌عنوان همکاران تپسی، جایگاه ویژه‌ای برای شرکت
              دارند. به همین‌دلیل مزایای مختلفی برای آنها در نظر گرفته شده است.
            </h5>

            <h4 class="mt-5">کسب درآمد روزانه، پایدار و بدون محدودیت</h4>

            <ul class="mt-4 navbar-nav">
              <li>۱. امکان تسویه‌ی اعتبار در هر ساعت از شبانه‌روز</li>
              <li>
                ۲. طرح‌های تشویقی، ماموریت‌ها‌، پاداش و اعطای وام‌های قرض‌الحسنه
                به‌طور دوره‌ای
              </li>
              <li>
                ۳. نمایش مکان‌های پردرخواست در اپلیکیشن و دریافت سفرهای طلایی
              </li>
            </ul>

            <h4 class="mt-5">تضمین امنیت و پشتیبانی رانندگان</h4>

            <ul class="mt-4 navbar-nav">
              <li>۱. پشتیبانی ۲۴ ساعته</li>
              <li>
                ۲. امکانات امنیت سفر شامل تماس اضطراری با واحد امنیت و پشتیبانی
                ۲۴ ساعته تیم امنیت
              </li>
            </ul>

            <h4 class="mt-5">واریز سهمیه بنزین ویژه رانندگان تپسی</h4>

            <ul class="mt-4 navbar-nav">
              <li>۱. نمایش میزان پیمایش ماهانه درون اپلیکیشن</li>
              <li>۲. محاسبه‌ی مسافت طی شده تا مسافر در پیمایش</li>
            </ul>

            <h4 class="mt-5 d-flex align-items-center">
              استفاده از مزایای
              <a href="http://" class="nav-link">باشگاه رانندگان تپسی</a>
            </h4>

            <ul class="mt-4 navbar-nav">
              <li>
                ۱. تخفیف روی خدمات خودرو مانند بیمه، سرویس‌های دوره‌ای، خرید
                لاستیک و ...
              </li>
              <li>
                ۲. تخفیف روی خدمات رفاهی مانند وام قرض‌الحسنه، خدمات درمانی،
                خرید اقساطی و ... ثبت نام راننده تاکس
              </li>
            </ul>

            <div
              class="
                d-md-flex
                justify-content-center justify-content-md-start
                align-items-center
                mt-5
              "
            >
              <a
                href="http://"
                class="btn btn-primary p-3 ms-md-3 mb-3 mb-md-0 radiusthings"
                >ثبت نام رانندگان تاکسی انلاین</a
              >
              <a
                href="http://"
                class="btn btn-primary p-3 ms-md-3 mb-3 mb-md-0 radiusthings"
                >دانلود برنامه تپسی راننده</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--section cards-->

    <div class="container-fluid mt6">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <a href="#" class="nav-link card border-0 hovercards p-4">
              <img
                src="./images/usage2-scaled.jpg"
                class="card-img-top radiusthings"
                alt="..."
              />
              <div class="card-body">
                <h4 class="text-secondary mb-3">
                  از مصرف سوخت خودروهای مختلف چه می دانید؟
                </h4>
                <p class="card-text text-dark">
                  امروزه رفت ‌و آمد با انواع وسایل نقلیه عمومی و شخصی یکی از
                  متداول‌ترین امور روزمره برای بیشتر افراد جامعه است. سوالی
                </p>
              </div>
            </a>
          </div>

          <div class="col-12 col-md-4">
            <a href="#" class="nav-link card border-0 hovercards p-4">
              <img
                src="./images/cheapest-smartphones.jpg"
                class="card-img-top radiusthings"
                alt="..."
              />
              <div class="card-body">
                <h4 class="text-secondary mb-3">
                  آشنایی با ارزان‌ترین گوشی‌های هوشمند برای کار و تحصیل
                </h4>
                <p class="card-text text-dark">
                  گوشی همراه این روزها، باید هم بتواند نیازهای روزانه ما را رفع
                  کند هم قیمت مناسبی داشته باشد. در این مقاله به شما
                </p>
              </div>
            </a>
          </div>

          <div class="col-12 col-md-4">
            <a href="#" class="nav-link card border-0 hovercards p-4">
              <img
                src="./images/accessibility2.jpg"
                class="card-img-top radiusthings"
                alt="..."
              />
              <div class="card-body">
                <h4 class="text-secondary mb-3">
                  دسترس‌پذیری تپسی برای شهروندان دارای معلولیت
                </h4>
                <p class="card-text text-dark">
                  تپسی اولین تاکسی اینترنتی ایرانی است که برای افراد دارای
                  معلولیت دسترس‌پذیر است. تپسی برای شهروندان نابینا، ناشنوا و کم
                  شنوا، افراد دارای ولیچر و عصا دسترس‌پذیر است؛ دسترس‌پذیری تپسی
                  امکانات ساده و مهمی
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--section map-->

    <div class="container-fluid mt6 bgmap d-none d-md-block">
      <div class="container p-5">
        <h1 class="fw-bold mb-4">تپسی در ایران</h1>

        <div class="d-flex flex-wrap">
          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">تهران</p>
            <span>Tehran</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">کرج</p>
            <span>Karaj</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">مشهد</p>
            <span>Mashhad</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">اصفهان</p>
            <span>Isfahan</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">شیراز</p>
            <span>Shiraz</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">ارومیه</p>
            <span>Urmia</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">لاهیجان</p>
            <span>Lahijan</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">رشت</p>
            <span>Rasht</span>
          </div>
        </div>

        <div class="d-flex flex-wrap mt-4">
          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">تهران</p>
            <span>Tehran</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">کرج</p>
            <span>Karaj</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">مشهد</p>
            <span>Mashhad</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">اصفهان</p>
            <span>Isfahan</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">شیراز</p>
            <span>Shiraz</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">ارومیه</p>
            <span>Urmia</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">لاهیجان</p>
            <span>Lahijan</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">رشت</p>
            <span>Rasht</span>
          </div>
        </div>

        <div class="d-flex flex-wrap mt-4">
          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">قائم‌شهر</p>
            <span>Qaem Shahr</span>
          </div>

          <div
            class="
              d-flex
              flex-column
              justify-content-center
              align-items-center
              me-5
            "
          >
            <p class="m-0 fw-bold">آمل</p>
            <span>Amol</span>
          </div>
        </div>
      </div>
    </div>

<script src="js/script.js"></script>

<?php include_once 'include/footer.php'; ?>