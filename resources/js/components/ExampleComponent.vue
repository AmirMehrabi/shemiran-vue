<template>
  <div>
    <div class="flex flex-row w-4/5 my-auto" v-if="step >= 1">
      <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
        <p class="text-sm text-blue-normal">مرحله اول</p>
        <p class="font-bold text-blue-main">انتخاب بخش</p>
      </div>
      <div
        class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft"
      >
        <div class="flex flex-row items-center">
          <div class="flex-1">
            <p class="text-blue-normal">لطفاً بخش مورد نظر خود را انتخاب کنید</p>
          </div>
          <div class="flex-1 text-left">
            <select
              v-model="selected"
              :disabled="step != 1"
              v-on:change="selectDoctor()"
              class="bg-white px-2 rounded w-48 irsans focus:outline-none border border-transparent active:border-gray-300"
            >
              <option :value="null">انتخاب بخش</option>
              <option class="bg-white">بخش مغز و اعصاب</option>
              <option class="bg-white">بخش قلب</option>
            </select>
            <span>Selected: {{ selected }}</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Second part -->
    <div class="flex flex-row w-4/5 my-auto mt-4" v-if="step >= 2">
      <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
        <p class="text-sm text-blue-normal">مرحله دوم</p>
        <p class="font-bold text-blue-main">زمان حضور در مطب</p>
      </div>
      <div
        class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft"
      >
        <p class="text-blue-normal">لطفا زمان نوبت دلخواه خود را از میان نوبت‌های خالی انتخاب کنید</p>
        <img src="images/nobat.png" class="w-full" alt />

        <div class="text-center my-6">
          <button
            @click.prevent="next()"
            :disabled="step != 2"
            class="btn-register irsans text-sm hover:shadow-blue font-bold shadow-blue-lg hover:shadow-blue transition-all px-20 py-3 leading-none text-white bg-blue-500 border-blue-500 rounded-large text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0"
          >
            انتخاب
            نوبت
          </button>
        </div>
      </div>
    </div>

    <!-- Third part -->

    <div class="flex flex-row w-4/5 my-auto mt-4" v-if="step >= 3">
      <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
        <p class="text-sm text-blue-normal">مرحله سوم</p>
        <p class="font-bold text-blue-main">تائید اطلاعات</p>
      </div>
      <div
        class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft"
      >
        <p
          class="text-blue-normal mb-4"
        >مشخصات زیر را به دقت بخوانید و مطمئن شوید که همه چیز مورد تائید شماست</p>
        <div class="flex flex-row">
          <div class="flex-1">
            <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">
              تاریخ نوبت
              <span class="font-bold text-base text-blue-main mr-4">دوشنبه ۲۵ شهریور ۱۳۹۸</span>
            </p>

            <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">
              ساعت مراجعه
              <span class="font-bold text-base text-blue-main mr-4">۱۶:۳۰ بعد از ظهر</span>
            </p>

            <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">
              نام پزشک
              <span
                class="font-bold text-base text-blue-main mr-4"
              >دکتر علیرضا بخشی - قلب و عروق</span>
            </p>
          </div>
          <div class="flex-1">
            <p class="text-blue-normal text-sm inline-block py-1 mb-3">
              هزینه‌ی قابل پرداخت
              <span class="font-bold text-base text-blue-main mr-4">۲۵۰،۰۰۰ ریال</span>
            </p>

            <div class="flex items-center w-full">
              <!-- Toggle Button -->
              <label for="toogleA" class="flex items-center cursor-pointer">
                <p class="text-blue-normal text-sm inline-block py-1 ml-2">
                  به صورت اینترنتی پرداخت
                  می‌کنم
                </p>
                <!-- toggle -->
                <div class="relative">
                  <!-- input -->
                  <input id="toogleA" type="checkbox" class="hidden" />
                  <!-- line -->
                  <div class="toggle__line w-10 h-4 rounded-full bg-white shadow-blue-lg"></div>
                  <!-- dot -->
                  <div
                    class="toggle__dot absolute w-6 h-6 bg-white rounded-full shadow inset-y-0 left-0"
                  ></div>
                </div>
                <!-- label -->
                <div class="mr-3 text-blue-main text-sm irsans font-bold">بله</div>
              </label>
            </div>

            <p class="font-bold text-blue-normal text-sm mt-6">توصیه‌های پیش از حضور در مرکز:</p>
            <p
              class="text-gray-600 text-xs"
            >در زمان مراجعه حتما شماره پیگیری نوبت را به همراه داشته باشید</p>
            <p class="text-gray-600 text-xs">در صورت عدم مراجعه در زمان مقرر، نوبت شما لغو خواهد شد</p>
          </div>
        </div>
        <div class="text-center my-6">
          <button
            @click.prevent="next()"
            :disabled="step != 3"
            class="btn-register irsans text-sm hover:shadow-blue font-bold shadow-blue-lg hover:shadow-blue transition-all px-20 py-3 leading-none text-white bg-blue-500 border-blue-500 rounded-large text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0"
          >
            ثبت
            نهایی و پرداخت
          </button>
        </div>
      </div>
    </div>

    <!-- Follow-up part -->

    <div v-if="step >= 4">
      <div
        class="flex flex-col w-3/5 mt-10 mx-auto bg-blue-light irsans font-bold text-blue-main border-r-4 border-blue-normal text-center p-1 text-xs rounded-l-full"
      >
        <p>
          روزبه بمانی عزیز، نوبت شما با موفقیت در سامانه نوبت دهی ثبت شد. جهت ویرایش آن می‌توانید به قسمت
          <span
            class="text-red-700 hover:text-red-800"
          >
            <a href="#">نوبت‌های من</a>
          </span> در پروفایل خود مراجعه
          کنید.
        </p>
      </div>
      <div class="text-center">
        <p class="text-blue-normal text-xs border-b border-gray-400 inline-block py-1 mb-3">
          شماره‌ی پیگیری
          <span class="font-bold text-xs text-blue-main mr-4">۹۷۱۳۱۰۹۸</span>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import vSelect from "vue-select";

export default {
  data() {
    return {
      selected: null,
      message: null,
      options: ["قلب", "مغز و اعصاب"],
      step: 1,
      registration: {
        drName: null,
        email: null,
        city: null,
        state: null,
        numtickets: 0,
        shirtsize: "XL"
      }
    };
  },
  methods: {
    selectDoctor() {
      this.step++;
    },
    prev() {
      this.step--;
    },
    next() {
      this.step++;
    },
    submit() {
      alert("Submit to blah and show blah and etc.");
    }
  },
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    "v-select": vSelect
  }
};
</script>
