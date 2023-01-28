<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tugas Landing Page') }}
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative">
  <div class="absolute inset-0 bg-gray-300">
   <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d990.1900335844674!2d106.9401783522308!3d-6.919253723836658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e68484918c95453%3A0x38de6b2e16745c5f!2sJl.%20Samsi%20158%2C%20Cisarua%2C%20Kec.%20Cikole%2C%20Kabupaten%20Sukabumi%2C%20Jawa%20Barat%2043115!3m2!1d-6.9193639!2d106.94014999999999!5e0!3m2!1sid!2sid!4v1674878286201!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback Untuk Gilang</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, delectus.</p>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Pesan</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim</button>
      <p class="text-xs text-gray-500 mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>
  </div>
</section>
</x-app-layout>
