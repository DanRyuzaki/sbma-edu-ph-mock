<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>St. Bernadette Montessori Academy — Redesign Concept v2</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Public+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          ink:   '#15325E',   
          ink2:  '#2C4F86',   
          rust:  '#C1592E',   
          teal:  '#1C8A74',   
          cloud: '#F3F5F9',   
        },
        fontFamily: {
          serif: ['Fraunces', 'serif'],
          sans:  ['"Public Sans"', 'sans-serif'],
          mono:  ['"IBM Plex Mono"', 'monospace'],
        },
      }
    }
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  ::selection { background: #C1592E; color: #fff; }
  :focus-visible { outline: 2px solid #C1592E; outline-offset: 3px; border-radius: 2px; }
  @media (prefers-reduced-motion: no-preference) {
    .animate-fade-up { animation: fadeUp .9s ease both; }
  }
  @keyframes fadeUp { from { opacity:0; transform:translateY(14px);} to { opacity:1; transform:translateY(0);} }
  .rod-seg { display:inline-block; height:10px; border-radius:2px; }
</style>
</head>
<body class="bg-white text-ink font-sans antialiased">

<header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-ink/10">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#" class="flex items-center gap-3">
      <img src="https://sbma.edu.ph/assets/images/logo-122x122.png" alt="SBMA crest" class="h-9 w-9">
      <span class="font-serif text-[15px] tracking-wide uppercase text-ink" style="font-variant:small-caps;">St. Bernadette Montessori Academy</span>
    </a>
    <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-ink/80">
      <a href="#programs" class="hover:text-ink transition">Programs</a>
      <a href="#history" class="hover:text-ink transition">History</a>
      <a href="#mission" class="hover:text-ink transition">Mission &amp; Vision</a>
      <a href="#admission" class="hover:text-ink transition">Admission</a>
      <a href="#campus" class="hover:text-ink transition">Campus Life</a>
      <a href="#contact" class="hover:text-ink transition">Contact Us</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="https://forms.gle/eRmqmSohHzWHErkt6" class="hidden sm:inline-flex items-center rounded-full bg-rust text-white text-sm font-semibold px-5 py-2.5 shadow-sm hover:brightness-95 transition">Enroll Now</a>
      <button id="menu-btn" aria-expanded="false" aria-controls="mobile-menu" class="lg:hidden p-2 -mr-2 text-ink">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>
  <div id="mobile-menu" class="hidden lg:hidden border-t border-ink/10 bg-white px-6 py-4 flex flex-col gap-4 text-sm font-medium">
    <a href="#programs">Programs</a>
    <a href="#history">History</a>
    <a href="#mission">Mission &amp; Vision</a>
    <a href="#admission">Admission</a>
    <a href="#campus">Campus Life</a>
    <a href="#contact">Contact Us</a>
    <a href="https://forms.gle/eRmqmSohHzWHErkt6" class="inline-flex justify-center rounded-full bg-rust text-white font-semibold px-5 py-2.5 mt-2">Enroll Now</a>
  </div>
</header>

<section class="relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24 grid lg:grid-cols-2 gap-14 items-center">
    <div class="animate-fade-up">
      <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-5">Service, Benevolence, Mastery, and Accuracy</p>
      <h1 class="font-serif text-[2.3rem] leading-[1.15] sm:text-[2.7rem] lg:text-[3.1rem] font-semibold text-ink">"Where children's intellectual growth accelerates, and practical life flourishes."</h1>
      <p class="mt-6 text-ink/70 text-lg max-w-md leading-relaxed">Founded in 2011, St. Bernadette Montessori Academy has grown from a single building of thirty-four pupils into a full Preschool–Junior High School campus — pairing the Montessori method with DepEd's K to 12 curriculum, taught entirely in English.</p>
      <div class="mt-9 flex flex-wrap gap-4">
        <a href="https://forms.gle/eRmqmSohHzWHErkt6" class="inline-flex items-center rounded-full bg-rust text-white font-semibold px-7 py-3.5 shadow-sm hover:brightness-95 transition">Enroll Now</a>
        <a href="#admission" class="inline-flex items-center rounded-full border border-ink/30 text-ink font-semibold px-7 py-3.5 hover:bg-ink hover:text-white hover:border-ink transition">See Admission Requirements</a>
      </div>
    </div>
    <div class="relative animate-fade-up" style="animation-delay:.15s">
      <div class="rounded-[2rem] overflow-hidden shadow-xl aspect-[4/5] max-w-md mx-auto lg:mx-0">
        <img src="https://sbma.edu.ph/assets/images/i5-1-2000x966.jpeg" alt="Students at St. Bernadette Montessori Academy" class="w-full h-full object-cover">
      </div>
      <div class="absolute -bottom-7 -left-4 sm:-left-8 bg-white rounded-2xl shadow-lg p-4 flex items-center gap-3 max-w-[16rem] border border-ink/5">
        <img src="https://sbma.edu.ph/assets/images/-dsc0097-2000x1333.jpg" alt="Award" class="w-12 h-14 rounded-lg object-cover flex-shrink-0">
        <div>
          <p class="font-mono text-[10px] uppercase tracking-wide text-rust">Feb 22, 2020 · Bangkok</p>
          <p class="font-serif text-sm font-semibold leading-snug mt-0.5">Asia's Outstanding Emerging School of the Year</p>
        </div>
      </div>
    </div>
  </div>

  <div class="max-w-7xl mx-auto px-6 pb-10 flex gap-1.5" aria-hidden="true">
    <span class="rod-seg bg-ink" style="width:24px"></span>
    <span class="rod-seg bg-ink2" style="width:48px"></span>
    <span class="rod-seg bg-teal" style="width:72px"></span>
    <span class="rod-seg bg-rust" style="width:96px"></span>
    <span class="rod-seg bg-ink/25" style="width:120px"></span>
  </div>
</section>



<section id="programs" class="max-w-7xl mx-auto px-6 py-24">
  <div class="max-w-2xl">
    <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-3">Our Programs</p>
    <h2 class="font-serif text-3xl md:text-4xl font-semibold">Preschool through Junior High School</h2>
    <p class="mt-4 text-ink/70 leading-relaxed">SBMA follows DepEd's K to 12 curriculum campus-wide, taught with a spiral approach and an English-only classroom policy — with the Montessori method shaping the Preschool years.</p>
  </div>
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">
    <article class="bg-white rounded-2xl p-7 border border-ink/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition">
      <span class="inline-block font-mono text-xs bg-cloud rounded-full px-3 py-1 text-ink/60">Ages 2.5 – 6</span>
      <h3 class="font-serif text-xl font-semibold mt-4">Preschool (Casa)</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">Montessori-based learning across four levels — Pre-Junior, Junior, Senior, and Advanced — covering practical life, sensorial, language, number sense, science, and the arts.</p>
    </article>
    <article class="bg-white rounded-2xl p-7 border border-ink/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition">
      <span class="inline-block font-mono text-xs bg-cloud rounded-full px-3 py-1 text-ink/60">Grades 1 – 6</span>
      <h3 class="font-serif text-xl font-semibold mt-4">Grade School</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">The K to 12 curriculum, taught with a spiral approach that builds English, Filipino, Math, Science, and MAPEH skills cumulatively — entirely in English inside and outside the classroom.</p>
    </article>
    <article class="bg-white rounded-2xl p-7 border border-ink/10 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition">
      <span class="inline-block font-mono text-xs bg-cloud rounded-full px-3 py-1 text-ink/60">Grades 7 – 10</span>
      <h3 class="font-serif text-xl font-semibold mt-4">Junior High School</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">Coursework deepens across all learning areas, including Research and Statistics in Grade 10 — preparing students for Senior High and beyond.</p>
    </article>
  </div>
</section>

<section id="mission" class="bg-ink text-white py-24">
  <div class="max-w-7xl mx-auto px-6">
    <p class="font-mono text-xs uppercase tracking-[0.2em] text-rust mb-3">Our Mission</p>
    <h2 class="font-serif text-2xl md:text-3xl font-semibold max-w-3xl leading-snug">"To commit itself in bringing about changes in the learner's discipline, capabilities and skills, under the aegis of Service, Benevolence, Mastery and Accuracy."</h2>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-14">
      <div>
        <div class="flex gap-1 mb-4" aria-hidden="true"><span class="rod-seg bg-rust" style="width:40px"></span></div>
        <p class="font-serif text-3xl font-semibold text-rust">S</p>
        <h3 class="font-serif text-lg font-semibold mt-1">Service</h3>
        <p class="text-sm text-white/55 mt-2 leading-relaxed">Contributing meaningfully to the learning community and beyond.</p>
      </div>
      <div>
        <div class="flex gap-1 mb-4" aria-hidden="true"><span class="rod-seg bg-teal" style="width:40px"></span></div>
        <p class="font-serif text-3xl font-semibold text-teal">B</p>
        <h3 class="font-serif text-lg font-semibold mt-1">Benevolence</h3>
        <p class="text-sm text-white/55 mt-2 leading-relaxed">Leading with kindness and goodwill in every interaction.</p>
      </div>
      <div>
        <div class="flex gap-1 mb-4" aria-hidden="true"><span class="rod-seg bg-ink2" style="width:40px"></span></div>
        <p class="font-serif text-3xl font-semibold text-white">M</p>
        <h3 class="font-serif text-lg font-semibold mt-1">Mastery</h3>
        <p class="text-sm text-white/55 mt-2 leading-relaxed">Building real command of skills and knowledge, not just familiarity.</p>
      </div>
      <div>
        <div class="flex gap-1 mb-4" aria-hidden="true"><span class="rod-seg bg-rust" style="width:40px"></span></div>
        <p class="font-serif text-3xl font-semibold text-rust">A</p>
        <h3 class="font-serif text-lg font-semibold mt-1">Accuracy</h3>
        <p class="text-sm text-white/55 mt-2 leading-relaxed">Precision and care in how learners think, work, and speak.</p>
      </div>
    </div>

    <div class="mt-16 pt-10 border-t border-white/10">
      <p class="font-mono text-xs uppercase tracking-[0.2em] text-rust mb-3">Our Vision</p>
      <p class="font-serif text-xl md:text-2xl max-w-3xl leading-snug text-white/90">"To cater and enhance opportunities for intellectual and moral growth and development, with an end in view of developing basic knowledge, attitudes, and values."</p>
    </div>
  </div>
</section>

<section id="history" class="max-w-7xl mx-auto px-6 py-24">
  <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-3">Our History</p>
  <h2 class="font-serif text-3xl md:text-4xl font-semibold">For the learning community</h2>

  <div class="grid lg:grid-cols-3 gap-10 mt-14">
    <div>
      <div class="flex gap-1 mb-4" aria-hidden="true"><span class="rod-seg bg-ink" style="width:32px"></span></div>
      <p class="font-mono text-xs text-ink/45">FEBRUARY 2011</p>
      <h3 class="font-serif text-lg font-semibold mt-2">A single building, three classrooms</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">SBMA's first building opens on Isabel Avenue, Kapitan Pepe, Cabanatuan City — accommodating 34 pupils from Nursery to Grade 1, taught by 3 teachers.</p>
    </div>
    <div>
      <div class="flex gap-1 mb-4" aria-hidden="true">
        <span class="rod-seg bg-ink" style="width:32px"></span><span class="rod-seg bg-ink2" style="width:32px"></span>
      </div>
      <p class="font-mono text-xs text-ink/45">ACADEMIC YEAR 2018</p>
      <h3 class="font-serif text-lg font-semibold mt-2">750 students, 29 classrooms</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">The school has grown to 51 teachers and 3 laboratory rooms, now offering Preschool through Junior High School under DepEd's K to 12 curriculum.</p>
    </div>
    <div>
      <div class="flex gap-1 mb-4" aria-hidden="true">
        <span class="rod-seg bg-ink" style="width:32px"></span><span class="rod-seg bg-ink2" style="width:32px"></span><span class="rod-seg bg-rust" style="width:32px"></span>
      </div>
      <p class="font-mono text-xs text-ink/45">FEBRUARY 22, 2020</p>
      <h3 class="font-serif text-lg font-semibold mt-2">Recognized across Asia</h3>
      <p class="text-sm text-ink/60 mt-2 leading-relaxed">Named The Outstanding Emerging School of the Year in Asia by the International Education Summit &amp; Awards in Bangkok, Thailand.</p>
    </div>
  </div>

  <div class="mt-20 grid md:grid-cols-[220px_1fr] gap-8 items-start bg-cloud rounded-2xl p-8">
    <img src="https://sbma.edu.ph/assets/images/lolo-1466x825.jpg" alt="Dr. Edisteo B. Bernardez" class="rounded-xl w-full h-40 md:h-full object-cover">
    <div>
      <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-3">Founded by an educator, for educators</p>
      <p class="text-ink/75 leading-relaxed">St. Bernadette Montessori Academy was founded in 2011 by <strong>Dr. Edisteo B. Bernardez</strong>, an educator with more than fifty years in the classroom. What began as one building with three classrooms has grown into a full Preschool-to-Junior-High-School campus, still guided by the same founding commitment to discipline, capability, and character.</p>
    </div>
  </div>
</section>

<section id="campus" class="bg-cloud py-24">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex items-end justify-between flex-wrap gap-4">
      <div>
        <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-3">Snapshots</p>
        <h2 class="font-serif text-3xl md:text-4xl font-semibold">Campus Life</h2>
      </div>
      <a href="https://www.sbma.edu.ph/CampusLife.html" class="text-sm font-semibold text-ink2 hover:text-ink transition">See the full gallery →</a>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-12">
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/dsc0571-2-2000x1333-800x533.jpg" alt="Campus life at SBMA" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/dsc0923-2-2000x1333-800x533.jpg" alt="Campus life at SBMA" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/dscf5237-1-2000x1333-800x533.jpg" alt="Campus life at SBMA" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/dsc0102-2-2000x1333-800x533.jpg" alt="Campus life at SBMA" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/img-10-2000x1500-800x600.jpg" alt="Campus life at SBMA" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
      <div class="rounded-2xl overflow-hidden aspect-[4/3] group">
        <img src="https://sbma.edu.ph/assets/images/i3-1-960x506.jpeg" alt="SBMA faculty" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
      </div>
    </div>
  </div>
</section>

<section id="admission" class="max-w-7xl mx-auto px-6 py-24">
  <p class="font-mono text-xs uppercase tracking-[0.2em] text-teal mb-3">Admission</p>
  <h2 class="font-serif text-3xl md:text-4xl font-semibold max-w-2xl">Requirements for new students &amp; transferees</h2>

  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
    <div class="border border-ink/10 rounded-2xl p-6">
      <h3 class="font-serif font-semibold text-ink">Preschool</h3>
      <ul class="text-sm text-ink/60 mt-3 space-y-2">
        <li>PSA Birth Certificate</li>
        <li>Form 138 (if any)</li>
      </ul>
    </div>
    <div class="border border-ink/10 rounded-2xl p-6">
      <h3 class="font-serif font-semibold text-ink">Grade 1</h3>
      <ul class="text-sm text-ink/60 mt-3 space-y-2">
        <li>PSA Birth Certificate</li>
        <li>ECCD Checklist</li>
        <li>Form 138</li>
      </ul>
    </div>
    <div class="border border-ink/10 rounded-2xl p-6">
      <h3 class="font-serif font-semibold text-ink">Grades 2–6</h3>
      <ul class="text-sm text-ink/60 mt-3 space-y-2">
        <li>PSA Birth Certificate</li>
        <li>Form 138</li>
        <li>Form 137</li>
        <li>Good Moral Certificate</li>
      </ul>
    </div>
    <div class="border border-ink/10 rounded-2xl p-6">
      <h3 class="font-serif font-semibold text-ink">Junior High School</h3>
      <ul class="text-sm text-ink/60 mt-3 space-y-2">
        <li>PSA Birth Certificate</li>
        <li>Form 138</li>
        <li>Form 137</li>
        <li>Good Moral Certificate</li>
      </ul>
    </div>
  </div>

  <div class="mt-10 flex flex-wrap gap-4 items-center">
    <a href="https://forms.gle/eRmqmSohHzWHErkt6" class="inline-flex items-center rounded-full bg-rust text-white font-semibold px-6 py-3 hover:brightness-95 transition">Online Registration Form</a>
    <a href="https://drive.google.com/file/d/1hfLqg7hb1FuDPj1BAXsb-Ec0a7s4kbal/view" class="inline-flex items-center rounded-full border border-ink/30 text-ink font-semibold px-6 py-3 hover:bg-ink hover:text-white hover:border-ink transition">SBMA FLEx Guidelines</a>
    <a href="https://www.deped.gov.ph/" class="inline-flex items-center gap-2 text-sm text-ink/50 hover:text-ink transition ml-2">
      <img src="https://sbma.edu.ph/assets/images/1920px-department-of-education-deped.svg-1086x554.png" alt="DepEd" class="h-6">
      K to 12 Curriculum, Department of Education
    </a>
  </div>
</section>

<section class="bg-cloud py-20 text-center">
  <div class="max-w-2xl mx-auto px-6">
    <h2 class="font-serif text-3xl md:text-4xl font-semibold">Ready to enroll?</h2>
    <p class="mt-4 text-ink/70">Submit the online registration form, or visit the Admin office at the SBMA main building on Isabel Avenue, Kapitan Pepe, Cabanatuan City.</p>
    <div class="mt-8 flex flex-wrap gap-4 justify-center">
      <a href="https://forms.gle/eRmqmSohHzWHErkt6" class="inline-flex items-center rounded-full bg-rust text-white font-semibold px-7 py-3.5 shadow-sm hover:brightness-95 transition">Enroll Now</a>
      <a href="#contact" class="inline-flex items-center rounded-full border border-ink/30 text-ink font-semibold px-7 py-3.5 hover:bg-ink hover:text-white hover:border-ink transition">Contact the Admin Office</a>
    </div>
  </div>
</section>

<footer id="contact" class="bg-ink text-white/75">
  <div class="max-w-7xl mx-auto px-6 py-16 grid lg:grid-cols-[1fr_1fr_1fr_1.3fr] gap-10">
    <div>
      <img src="https://sbma.edu.ph/assets/images/logo-192x192.png" alt="SBMA crest" class="h-10 w-10 mb-4">
      <p class="font-serif text-white text-lg font-semibold">St. Bernadette Montessori Academy</p>
      <p class="text-sm mt-2 leading-relaxed">Isabel Avenue, Kapitan Pepe,<br>Cabanatuan City, Nueva Ecija</p>
    </div>
    <div>
      <p class="font-mono text-xs uppercase tracking-widest text-white/45 mb-4">Quick Links</p>
      <ul class="space-y-2 text-sm">
        <li><a href="#history" class="hover:text-white transition">Our History</a></li>
        <li><a href="#mission" class="hover:text-white transition">Mission &amp; Vision</a></li>
        <li><a href="#admission" class="hover:text-white transition">Admission</a></li>
        <li><a href="#campus" class="hover:text-white transition">Campus Life</a></li>
      </ul>
    </div>
    <div>
      <p class="font-mono text-xs uppercase tracking-widest text-white/45 mb-4">Contact</p>
      <ul class="space-y-2 text-sm">
        <li><a href="tel:+63444634436" class="hover:text-white transition">(044) 463-4436</a></li>
        <li><a href="mailto:sbmacabanatuan@gmail.com" class="hover:text-white transition">sbmacabanatuan@gmail.com</a></li>
        <li><a href="http://fb.com/1sbma" class="hover:text-white transition">facebook.com/1sbma</a></li>
      </ul>
    </div>
    <div class="rounded-2xl overflow-hidden h-40 lg:h-auto">
      <iframe
        class="w-full h-full min-h-[160px] grayscale contrast-125"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&q=place_id:ChIJTTFau_AolzMRmPrHwj1I8dw">
      </iframe>
    </div>
  </div>
 <div class="border-t border-white/10">

    <div class="max-w-7xl mx-auto px-6 py-6 flex justify-center text-xs text-white/45">

      <p class="text-center">© 2026 St. Bernadette Montessori Academy · ICT Department</p>

    </div>

  </div>
</footer>

<script>
  const btn = document.getElementById('menu-btn');
  const menu = document.getElementById('mobile-menu');
  btn.addEventListener('click', () => {
    const open = !menu.classList.contains('hidden');
    menu.classList.toggle('hidden');
    btn.setAttribute('aria-expanded', String(!open));
  });
</script>
</body>
</html>
