<div>
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="size-8" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">

              <x-navlink href="/home" :active="request()->is('home')">Home</x-navlink>
              <x-navlink href="/profil" :active="request()->is('profil')">Profil</x-navlink>
              <x-navlink href="/kontak" :active="request()->is('kontak')">Kontak</x-navlink>
              <x-navlink href="/student" :active="request()->is('student')">Student</x-navlink>
              <x-navlink href="/guardians" :active="request()->is('guardians')">guardians</x-navlink>
              <x-navlink href="/classroom" :active="request()->is('classroom')">Classroom</x-navlink>
              <x-navlink href="/teacher" :active="request()->is('teacher')">Teacher</x-navlink>
              <x-navlink href="/subject" :active="request()->is('subject')">Subject</x-navlink>

            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
