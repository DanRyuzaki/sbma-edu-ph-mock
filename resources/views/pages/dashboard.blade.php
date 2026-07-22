@extends('layouts.app')

@section('title', 'St. Bernadette Montessori Academy | Learning Through Real-World Experience')

@push('styles')
<style>
  section[id] { scroll-margin-top: 76px; }
</style>
@endpush

@section('content')

  {{-- ============ HERO ============ --}}
  <section id="hero" class="relative overflow-hidden">
    <div id="track" class="flex h-[420px] md:h-[560px] lg:h-[640px] transition-transform duration-700 ease-in-out">
      <div class="relative min-w-full h-full">
        <img src="{{ asset('images/hero/hero-1.jpg') }}" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-[#0F1B33]/60"></div>
      </div>
      <div class="relative min-w-full h-full">
        <img src="{{ asset('images/hero/hero-2.jpg') }}" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-[#0F1B33]/60"></div>
      </div>
      <div class="relative min-w-full h-full">
        <img src="{{ asset('images/hero/hero-3.jpg') }}" class="w-full h-full object-cover object-top">
        <div class="absolute inset-0 bg-[#0F1B33]/60"></div>
      </div>
      <div class="relative min-w-full h-full">
        <img src="{{ asset('images/hero/hero-4.jpg') }}" class="w-full h-full object-cover object-center">
        <div class="absolute inset-0 bg-[#0F1B33]/60"></div>
      </div>
    </div>

    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
      <span class="inline-block border border-amber-400 text-amber-400 text-xs font-semibold tracking-widest uppercase px-4 py-1.5 rounded-full mb-6">
        Montessori &middot; Faith &middot; Excellence
      </span>
      <h1 class="font-sans text-white text-4xl md:text-6xl font-bold leading-tight max-w-4xl mb-6">
        Learning Through Real-World Experience
      </h1>

      <div class="flex flex-col sm:flex-row gap-3">
        <a href="#mission" class="bg-amber-500 hover:bg-amber-400 text-[#0F1B33] font-semibold px-6 py-3 rounded-md transition">
          Our Philosophy
        </a>

      </div>
    </div>

    <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white rounded-full w-10 h-10 flex items-center justify-center transition">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </button>
    <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white rounded-full w-10 h-10 flex items-center justify-center transition">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </button>
  </section>

  {{-- ============ MISSION & VISION (About group — top) ============ --}}
  <section id="mission" class="bg-white py-20 px-6">
    <div class="max-w-5xl mx-auto text-center">
      <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Our Purpose</p>
      <h2 class="font-serif text-slate-900 text-4xl font-bold mb-12">Mission &amp; Vision</h2>

      <div class="grid md:grid-cols-2 gap-6 text-left">
        <div class="group relative bg-slate-50 border border-slate-100 hover:border-amber-300 rounded-2xl p-8 overflow-hidden transition hover:-translate-y-1 hover:shadow-lg">
          <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-500"></div>
          <span class="absolute -top-2 -right-1 font-serif text-slate-900/5 text-8xl font-bold leading-none select-none">01</span>
          <div class="relative">
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-400 to-amber-600 flex items-center justify-center mb-5 text-2xl shadow-lg shadow-amber-500/20">🎯</div>
            <h3 class="font-serif text-slate-900 text-2xl font-semibold mb-3">Mission</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              The St. Bernadette Montessori Academy pledges to commit itself in bringing about changes
              in the learner's discipline, capabilities and skills under the aegis of
              <span class="text-amber-600 font-medium">Service, Benevolence, Mastery and Accuracy</span>.
            </p>
          </div>
        </div>
        <div class="group relative bg-slate-50 border border-slate-100 hover:border-sky-300 rounded-2xl p-8 overflow-hidden transition hover:-translate-y-1 hover:shadow-lg">
          <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-sky-400 to-sky-500"></div>
          <span class="absolute -top-2 -right-1 font-serif text-slate-900/5 text-8xl font-bold leading-none select-none">02</span>
          <div class="relative">
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-sky-400 to-sky-600 flex items-center justify-center mb-5 text-2xl shadow-lg shadow-sky-500/20">⭐</div>
            <h3 class="font-serif text-slate-900 text-2xl font-semibold mb-3">Vision</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
              The St. Bernadette Montessori Academy envisions to cater and enhance opportunities for
              intellectual and moral growth and development with an end in view of developing
              <span class="text-amber-600 font-medium">basic knowledge, attitudes, and values</span>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============ HISTORY / OUR STORY (About group — continued) ============ --}}
  <section id="history" class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto">
      <div class="grid md:grid-cols-2 gap-10 items-start">

        {{-- Left column: event photo + founder quote card --}}
        <div class="space-y-4">
          <div class="rounded-xl overflow-hidden">
            {{-- TODO: swap in the actual Moving-Up/Graduation ceremony photo.
                 Save it to public/images/hero/moving-up-ceremony.jpg
                 — this filename is a placeholder until that asset is added. --}}
            <img src="{{ asset('images/hero/reward2022.jpg') }}" alt="2022" class="w-full h-64 md:h-72 object-cover">
          </div>

          <div class="relative rounded-xl overflow-hidden">
            {{-- TODO: swap in the actual founder photo. Save it to public/images/hero/founder.jpg
                 — this filename is a placeholder until that asset is added. --}}
            <img src="{{ asset('images/hero/founder.jpg') }}" alt="Dr. Edisteo B. Bernardez, Founder of SBMA" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-[#0F1B33]/95 via-[#0F1B33]/40 to-transparent"></div>
            <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="" class="absolute top-4 right-4 w-9 h-9 opacity-80">
          </div>
        </div>

        {{-- Right column: story text + stat cards --}}
        <div>
          <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Our Story</p>
          <h2 class="font-serif text-slate-900 text-3xl md:text-4xl font-bold leading-snug mb-6">
            Established in 2011,<br>Rooted in Excellence
          </h2>

          @php
            $storyPoints = [
              "The St. Bernadette Montessori Academy (SBMA) was established in 2011, founded by Dr. Edisteo B. Bernardez, an educator for over 50 years. SBMA is located at Isabel Avenue, Kapitan Pepe, Cabanatuan City in the province of Nueva Ecija.",
              "In February 2011, SBMA's first building was built accommodating only thirty-four pupils from nursery to Grade 1 with only three classrooms facilitated by three teachers. Years gone by, the school has emerged and is continuously improving as an outstanding educational institution for and of the community.",
              "In academic year 2018, SBMA had seven hundred fifty students, fifty-one teachers, twenty-nine classrooms, and three laboratory rooms. The school offers services to students of Preschool to Junior High School levels, implementing the K to 12 Curriculum of the Department of Education.",
            ];
          @endphp
          <ul class="space-y-4 text-slate-600 text-sm leading-relaxed mb-8">
            @foreach ($storyPoints as $point)
              <li class="flex items-start gap-2">
                <span class="text-amber-500 font-semibold shrink-0 mt-0.5">&raquo;</span>
                <span>{{ $point }}</span>
              </li>
            @endforeach
            <li class="flex items-start gap-2">
              <span class="text-amber-500 font-semibold shrink-0 mt-0.5">&raquo;</span>
              <span>
                On February 22, 2020, SBMA was awarded as
                <span class="font-semibold text-slate-900">The Outstanding Emerging School of the Year in Asia</span>
                by The International Education Summit &amp; Awards in Bangkok, Thailand.
              </span>
            </li>
          </ul>

          <div class="grid grid-cols-3 gap-3">
            <div class="bg-slate-50 rounded-xl p-4 text-center">
              <p class="font-serif text-amber-500 text-2xl font-bold">2011</p>
              <p class="text-slate-500 text-xs mt-1">Year Founded</p>
            </div>
            <div class="bg-slate-50 rounded-xl p-4 text-center">
              <p class="font-serif text-amber-500 text-2xl font-bold">750+</p>
              <p class="text-slate-500 text-xs mt-1">Students (2018)</p>
            </div>
            <div class="bg-slate-50 rounded-xl p-4 text-center">
              <p class="font-serif text-amber-500 text-2xl font-bold">51+</p>
              <p class="text-slate-500 text-xs mt-1">Teachers</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ============ ADMISSIONS BANNER (Admissions group — top; quote + ongoing banner) ============ --}}
  <section id="admission-links" class="bg-[#0F1B33] py-10 px-6">
    <div class="max-w-6xl mx-auto">
      <p class="text-center font-serif text-white text-3xl md:text-5xl font-semibold italic leading-snug max-w-3xl mx-auto mb-10">
        &ldquo;Where Children's Intellectual Growth Accelerates and Practical Life Flourishes&rdquo;
      </p>

      <div class="relative rounded-2xl overflow-hidden">
        <img src="{{ asset('images/hero/hero-4.jpg') }}" class="w-full h-64 md:h-72 object-cover">
        <div class="absolute inset-0 bg-blue-700/70"></div>

        <div class="absolute inset-0 flex flex-col md:flex-row items-center justify-center md:justify-between gap-8 px-8 md:px-16">
          <div class="flex gap-4 md:gap-6">
            @php
              $values = [
                ['label' => 'Service', 'color' => 'bg-red-500', 'icon' => '🤝'],
                ['label' => 'Benevolence', 'color' => 'bg-emerald-500', 'icon' => '🤲'],
                ['label' => 'Mastery', 'color' => 'bg-amber-500', 'icon' => '🎓'],
                ['label' => 'Accuracy', 'color' => 'bg-sky-500', 'icon' => '🎯'],
              ];
            @endphp
            @foreach ($values as $value)
              <div class="flex flex-col items-center text-center">
                <div class="w-14 h-14 rounded-full {{ $value['color'] }} flex items-center justify-center text-xl shadow-lg mb-2">
                  {{ $value['icon'] }}
                </div>
                <p class="text-white text-[10px] font-semibold tracking-wide">{{ strtoupper($value['label']) }}</p>
              </div>
            @endforeach
          </div>

          <div class="text-center md:text-right">
            <p class="text-white font-semibold text-sm">SBMA</p>
            <p class="text-white font-serif text-2xl md:text-3xl font-bold leading-tight">Admissions</p>
            <p class="text-amber-400 font-serif text-3xl md:text-4xl font-bold leading-tight">ONGOING</p>
            <p class="text-white text-sm mt-1">S.Y. 2026-2027</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ============ ACADEMIC PROGRAMS (Admissions group — continued) ============ --}}
  <section id="programs" class="bg-slate-50 py-20 px-6">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Academic Programs</p>
        <h2 class="font-serif text-slate-900 text-4xl font-bold mb-4">Programs for Every Stage of Growth</h2>
        <p class="text-slate-500 max-w-2xl mx-auto">
          From toddlers taking their first steps in independence to young adolescents stepping into
          the world — our Montessori continuum meets each child exactly where they are.
        </p>
      </div>

      @php
        $programs = [
          ['title' => 'Toddler', 'age' => '18 months – 3 years', 'color' => 'rose', 'icon' => '✨',
            'desc' => 'A gentle introduction to the Montessori environment. Toddlers develop independence, language, and motor skills in a warm, nurturing setting.',
            'points' => ['Sensory exploration', 'Language development', 'Social readiness', 'Self-care skills']],
          ['title' => 'Primary', 'age' => '3 – 6 years', 'color' => 'amber', 'icon' => '📚',
            'desc' => 'Our flagship Early Childhood program. Children discover mathematics, language arts, science, and culture through hands-on Montessori materials.',
            'points' => ['Practical life', 'Sensorial learning', 'Early literacy & math', 'Grace & courtesy']],
          ['title' => 'Lower Elementary', 'age' => '6 – 9 years', 'color' => 'emerald', 'icon' => '✏️',
            'desc' => 'Deep dives into the Great Lessons — cosmic education that connects history, biology, language, and mathematics in a unified narrative.',
            'points' => ['Research projects', 'Creative writing', 'Geometry & fractions', 'Cultural studies']],
          ['title' => 'Upper Elementary', 'age' => '9 – 12 years', 'color' => 'sky', 'icon' => '🌍',
            'desc' => 'Students take greater ownership of their learning, engaging in collaborative research, leadership, and preparation for middle school.',
            'points' => ['Advanced mathematics', 'World history & geography', 'STEM projects', 'Community service']],
          ['title' => 'Middle School', 'age' => '12 – 14 years', 'color' => 'violet', 'icon' => '🎭',
            'desc' => 'An adolescent program designed around real-world experiences, internships, entrepreneurship, and academic rigor for high school readiness.',
            'points' => ['Micro-economy', 'Arts & technology', 'Physical science', 'High school prep']],
          ['title' => 'Extended Day', 'age' => 'All levels', 'color' => 'amber', 'icon' => '🍌',
            'desc' => 'Before and after school care in a nurturing environment, with enrichment activities, reading time, and supervised free play.',
            'points' => ['Morning care 7:00am', 'Afternoon care 3:30–6pm', 'Enrichment clubs', 'Homework support']],
        ];
        $cardColors = [
          'rose' => 'border-rose-200 bg-rose-50 text-rose-700',
          'amber' => 'border-amber-200 bg-amber-50 text-amber-700',
          'emerald' => 'border-emerald-200 bg-emerald-50 text-emerald-700',
          'sky' => 'border-sky-200 bg-sky-50 text-sky-700',
          'violet' => 'border-violet-200 bg-violet-50 text-violet-700',
        ];
      @endphp

      <div class="grid md:grid-cols-3 gap-5">
        @foreach ($programs as $program)
          <div class="border rounded-xl p-6 {{ $cardColors[$program['color']] }}">
            <div class="flex items-center justify-between mb-1">
              <h3 class="font-serif text-lg font-bold">{{ $program['title'] }}</h3>
              <span class="text-xl">{{ $program['icon'] }}</span>
            </div>
            <p class="text-xs text-slate-500 mb-3">{{ $program['age'] }}</p>
            <p class="text-slate-700 text-sm mb-4">{{ $program['desc'] }}</p>
            <ul class="text-sm space-y-1">
              @foreach ($program['points'] as $point)
                <li class="flex items-center gap-2">
                  <span class="w-1 h-1 rounded-full bg-current"></span>{{ $point }}
                </li>
              @endforeach
            </ul>
          </div>
        @endforeach
      </div>

      <div class="text-center mt-10">
        <a href="#admission-guidance" class="inline-flex items-center gap-2 bg-[#0F1B33] hover:bg-[#182A4D] text-white font-semibold px-6 py-3 rounded-md transition">
          Start the Admission Process
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

  {{-- ============ ENHANCED K-12 CURRICULUM (Admissions group — continued, tabbed) ============ --}}
  <section id="curriculum" class="bg-white py-20 px-6" x-data="{}">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-4">
        <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Enhanced K-12 Curriculum</p>
        <h2 class="font-serif text-slate-900 text-3xl md:text-5xl font-bold max-w-2xl mx-auto leading-snug mb-4">
          "Where Children's Intellectual Growth Accelerates and Practical Life Flourishes"
        </h2>
        <p class="text-slate-500 text-sm max-w-2xl mx-auto mb-10">
          SBMA follows DepEd's K-12 Curriculum (Order No. 31, s. 2012) for Grade School through Junior
          High, enriched with the Montessori approach at the preschool level, with English as the
          medium of instruction inside and outside the classroom.
        </p>
      </div>

      <div class="flex justify-center mb-8">
        <div class="inline-flex bg-slate-100 rounded-full p-1">
          <button type="button" onclick="showCurriculumTab('casa')" id="tab-btn-casa"
            class="curriculum-tab-btn px-5 py-2 rounded-full text-sm font-semibold transition bg-[#0F1B33] text-white">
            Casa (Preschool)
          </button>
          <button type="button" onclick="showCurriculumTab('gradeschool')" id="tab-btn-gradeschool"
            class="curriculum-tab-btn px-5 py-2 rounded-full text-sm font-semibold transition text-slate-600">
            Grade School
          </button>
          <button type="button" onclick="showCurriculumTab('juniorhigh')" id="tab-btn-juniorhigh"
            class="curriculum-tab-btn px-5 py-2 rounded-full text-sm font-semibold transition text-slate-600">
            Junior High School
          </button>
        </div>
      </div>

      <div id="tab-panel-casa" class="curriculum-tab-panel">
        <div class="bg-amber-50 border border-amber-100 rounded-xl px-5 py-4 mb-8 text-sm text-slate-700">
          <span class="font-semibold">Casa Levels:</span> PRE-JUNIOR (2.5–3 yrs), JUNIOR (3–4 yrs),
          SENIOR (4–5 yrs), and ADVANCED (5–6 yrs) — based on RA 10157 Kindergarten Education Act,
          Montessori Curriculum, and DepEd Order No. 47 s. 2016.
        </div>

        @php
          $casaDomains = [
            ['icon' => '🌱', 'title' => 'Character & Practical Life Development',
              'desc' => 'Invites young learners to work on real-life situations developing independence, coordination, order, and concentration. Covers personal-social development, proper ethics, and refinement of motor coordination through games and manipulative activities.'],
            ['icon' => '👁️', 'title' => 'Sensorial Life, Physical Well-Being & Motor Development',
              'desc' => 'Develops gross and fine motor skills, sensory-perceptual concept skills, and enhances the maturity of sense organs. Covers refinement of motor coordination through appropriate games, plays, and manipulative activities that foster physical fitness.'],
            ['icon' => '🧡', 'title' => 'Social & Emotional Development',
              'desc' => 'Develops skills for relating with peers and adults. Provides social interaction through play dates, stage programs, and personality development events. Develops sense of self, empathy, and belongingness through group sharing and real-life learning.'],
            ['icon' => '🗣️', 'title' => 'Language Arts and Literacy Development',
              'desc' => 'Covers basics in reading, phonetic awareness, oral and written language through songs, plays, storytelling, and games. Textbooks and workbooks are provided for reading and writing exercises.'],
            ['icon' => '🔢', 'title' => 'Mathematics (Numeracy Skills)',
              'desc' => 'Develops classifying, seriating, and serializing objects according to sizes, colors, and shapes. Covers simple addition and subtraction using concrete objects, building readiness to transition from concrete to abstract concepts.'],
            ['icon' => '🔬', 'title' => 'Science',
              'desc' => 'Reflects learners\' understanding of the physical and natural environment, developing competencies in observing, describing, comparing, and classifying — nurturing lifelong curiosity and awareness of their surroundings.'],
            ['icon' => '🎨', 'title' => 'Arts',
              'desc' => 'Develops learners\' aesthetic sense and creative expression through drawing, painting, and manipulative activities, generating opportunities for artistic expression of emotions, thoughts, and ideas.'],
            ['icon' => '🌏', 'title' => 'Geography',
              'desc' => 'Provides an enriched general education preparing learners for higher education and lifelong learning, including learning the world\'s continents and countries alongside basic entrepreneurship concepts.'],
          ];
        @endphp

        <div class="grid md:grid-cols-3 gap-5">
          @foreach ($casaDomains as $domain)
            <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-sm">
              <div class="text-2xl mb-3">{{ $domain['icon'] }}</div>
              <h3 class="font-serif font-semibold text-slate-900 mb-2">{{ $domain['title'] }}</h3>
              <p class="text-slate-500 text-sm leading-relaxed">{{ $domain['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <div id="tab-panel-gradeschool" class="curriculum-tab-panel hidden">
        @php
          $gradeSchoolSubjects = [
            ['icon' => '🗣️', 'title' => 'English Communication Arts',
              'desc' => 'Develops listening, speaking, reading, and writing skills through learner-centered activities focused on effective English communication.'],
            ['icon' => '🇵🇭', 'title' => 'Filipino',
              'desc' => 'Naglalayong palawakin ang kakayahang komunikatibo at pahalagahan ang panitikang Filipino ng mga mag-aaral.'],
            ['icon' => '💬', 'title' => 'Mother Tongue (Grades 1–3)',
              'desc' => 'Builds communication skills in the learner\'s first language, covering vocabulary, language structure, and basic literary and informational texts.'],
            ['icon' => '🙏', 'title' => 'GMRC (Good Manners and Right Conduct)',
              'desc' => 'Focuses on holistic character development — understanding, self-reflection, collaboration, and responsible decision-making.'],
            ['icon' => '🔢', 'title' => 'Mathematics',
              'desc' => 'Builds number sense, reasoning, and real-life problem-solving skills through collaborative learning, with an emphasis on mastery of concepts.'],
            ['icon' => '🔬', 'title' => 'Science',
              'desc' => 'Engages learners in participative learning to build awareness and understanding of their community and environment, and grow scientific literacy.'],
            ['icon' => '⚽', 'title' => 'MAPEH',
              'desc' => 'Music, Arts, Physical Education, and Health — a performance- and activity-based program building fitness, creativity, and cultural literacy.'],
            ['icon' => '🌏', 'title' => 'Araling Panlipunan',
              'desc' => 'Tumatalakay sa kasaysayan at kultura ng Pilipinas, mahahalagang isyung panlipunan, at heograpiya ng bansa.'],
            ['icon' => '💻', 'title' => 'Computer Education (Grades 3–6)',
              'desc' => 'Develops technological literacy and responsible use of software and hardware through practical exercises.'],
            ['icon' => '🛠️', 'title' => 'T.L.E. / E.P.P. (Grades 4–6)',
              'desc' => 'Develops knowledge, skills, values, and attitude in Agriculture, Entrepreneurship, ICT, Home Economics, and Industrial Arts.'],
          ];
        @endphp
        <div class="grid md:grid-cols-3 gap-5">
          @foreach ($gradeSchoolSubjects as $subject)
            <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-sm">
              <div class="text-2xl mb-3">{{ $subject['icon'] }}</div>
              <h3 class="font-serif font-semibold text-slate-900 mb-2">{{ $subject['title'] }}</h3>
              <p class="text-slate-500 text-sm leading-relaxed">{{ $subject['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <div id="tab-panel-juniorhigh" class="curriculum-tab-panel hidden">
        @php
          $juniorHighSubjects = [
            ['icon' => '🗣️', 'title' => 'English Language Arts',
              'desc' => 'Develops communicative ability and literacy skills across listening, speaking, reading, writing, and viewing.'],
            ['icon' => '🇵🇭', 'title' => 'Filipino',
              'desc' => 'Naglalayong palawakin ang kakayahang komunikatibo at pahalagahan ang panitikang Filipino ng mga mag-aaral.'],
            ['icon' => '🙏', 'title' => 'ESP (Edukasyon sa Pagpapakatao)',
              'desc' => 'Nagtutuon sa pagpapaunlad ng pang-unawa, pagninilay, pakikipagtulungan, at responsableng pagpapasya.'],
            ['icon' => '🔢', 'title' => 'Mathematics',
              'desc' => 'Covers number sense, algebra, geometry, probability, and statistics applied to critical thinking and real-life problem solving.'],
            ['icon' => '🔬', 'title' => 'Science',
              'desc' => 'Covers Biology, Chemistry, Physics, and Earth/Space Science, focused on practical everyday application.'],
            ['icon' => '⚽', 'title' => 'MAPEH',
              'desc' => 'Explores aesthetic expression through music and art, alongside physical, mental, and social wellness for an active lifestyle.'],
            ['icon' => '🌏', 'title' => 'Araling Panlipunan',
              'desc' => 'Tumatalakay sa kasaysayan ng Pilipinas at ng mundo gamit ang mga piling primaryang sanggunian.'],
            ['icon' => '🛠️', 'title' => 'T.L.E.',
              'desc' => 'Prepares students for higher education and productive employment through entrepreneurship-integrated general education.'],
            ['icon' => '📊', 'title' => 'Research and Statistics (Grade 10)',
              'desc' => 'Develops critical thinking and problem-solving through quantitative and qualitative research methods.'],
          ];
        @endphp
        <div class="grid md:grid-cols-3 gap-5">
          @foreach ($juniorHighSubjects as $subject)
            <div class="bg-white border border-slate-100 rounded-xl p-6 shadow-sm">
              <div class="text-2xl mb-3">{{ $subject['icon'] }}</div>
              <h3 class="font-serif font-semibold text-slate-900 mb-2">{{ $subject['title'] }}</h3>
              <p class="text-slate-500 text-sm leading-relaxed">{{ $subject['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- ============ ADMISSION LINKS & GUIDANCE (Admissions group — continued) ============ --}}
  <section id="admission-guidance" class="bg-[#0F1B33] py-6 px-6 mt-0">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-10">
        <p class="text-amber-400 text-xs font-semibold tracking-widest uppercase mb-3">Resources</p>
        <h2 class="font-serif text-white text-4xl font-bold">Admission Links &amp; Guidance</h2>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <a href="https://forms.gle/eRmqmSohHzWHErkt6" target="_blank"
           class="group bg-white/5 border border-white/10 hover:border-amber-400/50 rounded-xl overflow-hidden transition">
           <img src="{{ asset('images/hero/admission-link.jpeg') }}" class="w-full h-80 md:h-96 object-cover">
          <div class="p-6 pb-4">
            <p class="text-amber-400 text-xs font-semibold tracking-widest uppercase mb-2">Online Registration</p>
            <h3 class="font-serif text-white text-lg font-semibold mb-2">Admission Application Form</h3>
            <p class="text-slate-400 text-sm">Fill out the official SBMA online registration form to start your enrollment process.</p>
          </div>
        </a>

        <a href="https://drive.google.com/file/d/1hfLqg7hb1FuDPj1BAxmb-Ec0a7s4kbal/view" target="_blank"
           class="group bg-white/5 border border-white/10 hover:border-amber-400/50 rounded-xl overflow-hidden transition">
           <img src="{{ asset('images/hero/SBMA_Flex_Guidance.png') }}" class="w-full h-80 md:h-96 object-cover">
           <div class="p-6 pb-4">
            <p class="text-amber-400 text-xs font-semibold tracking-widest uppercase mb-2">Learning Approach</p>
            <h3 class="font-serif text-white text-lg font-semibold mb-2">SBMA FLEx — Flexible Learning Exponent</h3>
            <p class="text-slate-400 text-sm">Learn about SBMA's Flexible Learning Exponent program — our approach to modern, adaptive education.</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  {{-- ============ ADMISSION REQUIREMENTS (Admissions group — continued, tabbed) ============ --}}
  <section id="admission-requirements" class="bg-white py-20 px-6">
    <div class="max-w-4xl mx-auto">
      <div class="text-center mb-10">
        <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Enrollment</p>
        <h2 class="font-serif text-slate-900 text-3xl md:text-4xl font-bold mb-4">Admission Requirements</h2>
        <p class="text-slate-500 text-sm max-w-2xl mx-auto">
          Please prepare the following documents based on your child's grade level and enrollment type.
        </p>
      </div>

      <div class="flex justify-center mb-10">
        <div class="inline-flex bg-slate-100 rounded-full p-1.5 gap-1">
          <button type="button" onclick="showAdmissionTab('new')" id="admtab-btn-new"
            class="admission-tab-btn px-5 py-2 rounded-full text-sm font-semibold transition border-2 border-amber-400 bg-[#0F1B33] text-white">
            New Students
          </button>
          <button type="button" onclick="showAdmissionTab('transferee')" id="admtab-btn-transferee"
            class="admission-tab-btn px-5 py-2 rounded-full text-sm font-semibold transition border-2 border-transparent text-slate-600 hover:border-amber-300 hover:text-[#0F1B33]">
            Transferees
          </button>
        </div>
      </div>

      <div id="admtab-panel-new" class="admission-tab-panel">
        @php
          $newStudentRequirements = [
            'Preschool' => ['PSA Birth Certificate', 'Form 138 (Report Card) (if any)'],
            'Grade 1' => ['PSA Birth Certificate', 'ECCD Checklist', 'Form 138 (Report Card)'],
            'Grades 2–6' => ['PSA Birth Certificate', 'Form 138 (Report Card)', 'Form 137', 'Good Moral Certificate'],
            'Junior High School' => ['PSA Birth Certificate', 'Form 138 (Report Card)', 'Form 137', 'Good Moral Certificate'],
          ];
        @endphp
        <div class="grid md:grid-cols-2 gap-5">
          @foreach ($newStudentRequirements as $level => $docs)
            <div class="border border-slate-100 rounded-xl p-6 bg-slate-50 hover:border-amber-300 hover:shadow-sm transition">
              <h3 class="font-serif font-semibold text-slate-900 mb-3">{{ $level }}</h3>
              <ul class="text-sm text-slate-600 space-y-1.5">
                @foreach ($docs as $doc)
                  <li class="flex items-start gap-2">
                    <span class="text-amber-500 font-semibold shrink-0">&raquo;</span> {{ $doc }}
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>

      <div id="admtab-panel-transferee" class="admission-tab-panel hidden">
        <div class="rounded-xl overflow-hidden mb-6">
          <img src="{{ asset('images/hero/transferees.jpg') }}" alt="Requirements for transferees" class="w-full h-auto object-contain rounded-xl">
        </div>
        @php
          $transfereeRequirements = [
            'Preschool' => ['PSA Birth Certificate', 'Form 138 (Report Card) (if any)'],
            'Grade 1' => ['PSA Birth Certificate', 'ECCD Checklist', 'Form 138 (Report Card)'],
            'Grades 2–6' => ['PSA Birth Certificate', 'Form 138 (Report Card)', 'Form 137', 'Good Moral Certificate'],
            'Junior High School' => ['PSA Birth Certificate', 'Form 138 (Report Card)', 'Form 137', 'Good Moral Certificate'],
          ];
        @endphp
        <div class="grid md:grid-cols-2 gap-5">
          @foreach ($transfereeRequirements as $level => $docs)
            <div class="border border-slate-100 rounded-xl p-6 bg-slate-50 hover:border-amber-300 hover:shadow-sm transition">
              <h3 class="font-serif font-semibold text-slate-900 mb-3">{{ $level }}</h3>
              <ul class="text-sm text-slate-600 space-y-1.5">
                @foreach ($docs as $doc)
                  <li class="flex items-start gap-2">
                    <span class="text-amber-500 font-semibold shrink-0">&raquo;</span> {{ $doc }}
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- ============ CAMPUS LIFE ============ --}}
  <section id="campus-life" class="bg-white py-20 px-6">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-12">
        <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">Campus Life</p>
        <h2 class="font-serif text-slate-900 text-4xl font-bold mb-4">Life Beyond the Classroom</h2>
        <p class="text-slate-500 max-w-2xl mx-auto">
          A thriving school community where students explore their passions, build friendships,
          and grow as leaders.
        </p>
      </div>

      @php
        $campusPhotos = [
          ['src' => 'https://sbma.edu.ph/assets/images/dsc0923-2-2000x1333-800x533.jpg', 'tag' => 'Cultural Arts', 'wide' => true],
          ['src' => 'https://sbma.edu.ph/assets/images/38200122-2124117451140028-6299043287361650688-n-1-960x720-800x600.jpg', 'tag' => 'Cultural Arts', 'wide' => false],
          ['src' => 'https://sbma.edu.ph/assets/images/dsc0662-2000x1333-800x533.jpg', 'tag' => 'Cultural Arts', 'wide' => false],
          ['src' => 'https://sbma.edu.ph/assets/images/dsc0358-2-2000x1333-800x533.jpg', 'tag' => 'Sports Fest', 'wide' => false],
          ['src' => 'https://sbma.edu.ph/assets/images/dsc0463-2000x1333-800x533.jpg', 'tag' => 'Sports Fest', 'wide' => false],
          ['src' => 'https://sbma.edu.ph/assets/images/dsc0102-2-2000x1333-800x533.jpg', 'tag' => 'Nutrition Month', 'wide' => false],
        ];
      @endphp

      <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-14">
        @foreach ($campusPhotos as $photo)
          <div class="relative rounded-xl overflow-hidden group {{ $photo['wide'] ? 'col-span-2' : '' }}">
            <img src="{{ $photo['src'] }}" class="w-full h-48 md:h-56 object-cover group-hover:scale-105 transition duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
            <span class="absolute bottom-3 left-3 bg-amber-400 text-[#0F1B33] text-xs font-semibold px-3 py-1 rounded-full">
              {{ $photo['tag'] }}
            </span>
          </div>
        @endforeach
      </div>

      @php
        $activities = [
          ['icon' => '🎭', 'bg' => 'bg-sky-100', 'title' => 'Arts & Cultural Performances', 'featured' => true,
            'desc' => 'Annual showcases celebrating global and Filipino culture through dance, music, and costume performances.'],
          ['icon' => '⚽', 'bg' => 'bg-slate-100', 'title' => 'Sports Fest', 'featured' => false,
            'desc' => 'School-wide sports festival featuring cheerdance, basketball, volleyball, and track events for all grade levels.'],
          ['icon' => '🥗', 'bg' => 'bg-emerald-100', 'title' => 'Nutrition Month', 'featured' => false,
            'desc' => 'Monthly health campaigns where students learn about proper nutrition through fun classroom activities.'],
          ['icon' => '💛', 'bg' => 'bg-amber-100', 'title' => 'Community Service', 'featured' => false,
            'desc' => 'Regular outreach programs connecting students with the local Cabanatuan City community.'],
          ['icon' => '📦', 'bg' => 'bg-orange-100', 'title' => 'Student Council', 'featured' => false,
            'desc' => 'Elected student leaders organize school events and champion student welfare initiatives.'],
          ['icon' => '💻', 'bg' => 'bg-slate-100', 'title' => 'STEM & ICT Club', 'featured' => false,
            'desc' => 'Technology and science clubs preparing students to be competitive in the modern global arena.'],
        ];
      @endphp

      <div class="grid md:grid-cols-3 gap-5">
        @foreach ($activities as $activity)
          <div class="border rounded-xl p-6 bg-white transition hover:shadow-sm {{ $activity['featured'] ? 'border-amber-300' : 'border-slate-100' }}">
            <div class="flex items-start gap-4">
              <div class="w-11 h-11 rounded-lg {{ $activity['bg'] }} flex items-center justify-center text-lg shrink-0">
                {{ $activity['icon'] }}
              </div>
              <div>
                <h3 class="font-serif font-semibold text-slate-900 mb-1">{{ $activity['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $activity['desc'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- ============ NEWS & EVENTS ============ --}}
  <section id="news-events" class="bg-[#F4F1EA] py-20 px-6">
    <div class="max-w-3xl mx-auto">
      <p class="text-amber-600 text-xs font-semibold tracking-widest uppercase mb-3">News &amp; Events</p>
      <h2 class="font-serif text-slate-900 text-4xl font-bold mb-10">What's Happening at SBMA</h2>

      @php
        $announcements = [
          [
            'badge' => 'Announcement',
            'schoolYear' => 'S.Y. 2026-2027',
            'title' => "Parents' Orientation Schedule",
            'image' => asset('images/hero/orientation.jpg'),
            'note' => "Please check the schedule above for your child's assigned orientation date and time. If you have not yet received a message from the adviser, feel free to reach out — we'll be happy to assist you.",
          ],
        ];
      @endphp

      <div class="space-y-6">
        @foreach ($announcements as $announcement)
          <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 md:p-8">
            <div class="flex items-center gap-3 mb-4">
              <span class="bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wide">
                {{ $announcement['badge'] }}
              </span>
              <span class="text-slate-400 text-xs">{{ $announcement['schoolYear'] }}</span>
            </div>

            <h3 class="font-serif text-slate-900 text-xl font-bold mb-4">{{ $announcement['title'] }}</h3>

            <img src="{{ $announcement['image'] }}" alt="{{ $announcement['title'] }}" class="w-full rounded-xl mb-4">

            <p class="text-slate-500 text-sm leading-relaxed">{{ $announcement['note'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  
@endsection

@push('scripts')
<script>
  function showCurriculumTab(tab) {
    document.querySelectorAll('.curriculum-tab-panel').forEach(panel => panel.classList.add('hidden'));
    document.getElementById('tab-panel-' + tab).classList.remove('hidden');

    document.querySelectorAll('.curriculum-tab-btn').forEach(btn => {
      btn.classList.remove('bg-[#0F1B33]', 'text-white');
      btn.classList.add('text-slate-600');
    });
    const activeBtn = document.getElementById('tab-btn-' + tab);
    activeBtn.classList.add('bg-[#0F1B33]', 'text-white');
    activeBtn.classList.remove('text-slate-600');
  }

  function showAdmissionTab(tab) {
    document.querySelectorAll('.admission-tab-panel').forEach(panel => panel.classList.add('hidden'));
    document.getElementById('admtab-panel-' + tab).classList.remove('hidden');

    document.querySelectorAll('.admission-tab-btn').forEach(btn => {
      btn.classList.remove('bg-[#0F1B33]', 'text-white', 'border-amber-400');
      btn.classList.add('text-slate-600', 'border-transparent');
    });
    const activeBtn = document.getElementById('admtab-btn-' + tab);
    activeBtn.classList.add('bg-[#0F1B33]', 'text-white', 'border-amber-400');
    activeBtn.classList.remove('text-slate-600', 'border-transparent');
  }

  const track = document.getElementById('track');
  const realSlideCount = track.children.length;
  const firstClone = track.children[0].cloneNode(true);
  track.appendChild(firstClone);

  let current = 0;
  let autoplayTimer;
  let isAnimating = false;

  function goTo(index) {
    if (isAnimating) return;
    isAnimating = true;
    current = index;
    track.style.transition = 'transform 0.7s ease-in-out';
    track.style.transform = `translateX(-${current * 100}%)`;
    resetAutoplay();
  }

  function next() { goTo(current + 1); }

  function prev() {
    if (isAnimating) return;
    if (current === 0) {
      track.style.transition = 'none';
      current = realSlideCount;
      track.style.transform = `translateX(-${current * 100}%)`;
      track.offsetHeight;
      goTo(realSlideCount - 1);
    } else {
      goTo(current - 1);
    }
  }

  track.addEventListener('transitionend', () => {
    isAnimating = false;
    if (current === realSlideCount) {
      track.style.transition = 'none';
      current = 0;
      track.style.transform = `translateX(0%)`;
      track.offsetHeight;
    }
  });

  function resetAutoplay() {
    clearInterval(autoplayTimer);
    autoplayTimer = setInterval(next, 6000);
  }

  document.getElementById('nextBtn').addEventListener('click', next);
  document.getElementById('prevBtn').addEventListener('click', prev);
  resetAutoplay();
</script>
@endpush