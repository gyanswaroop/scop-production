<?php
$siteAddress = '309, Ishwari Ganj - Palara Rd, Kalyanpur, Kanpur, Uttar Pradesh 208017';

$approvals = [
  'Pharmacy' => ['PCI, New Delhi', 'BTE, Lucknow', 'AKTU, Lucknow'],
  'Nursing' => ['Uttar Pradesh State Medical Faculty', 'Atal Bihari Vajpayee Medical University'],
  'Education' => ['Chhatrapati Shahu Ji Maharaj University, Kanpur'],
  'ITI' => ['NCVT']
];

$departmentDetails = [
  'pharmacy' => [
    'name'=>'Pharmacy', 'short'=>'Sakshi College of Pharmacy', 'theme'=>'pharma', 'icon'=>'fa-prescription-bottle-medical', 'image'=>'assets/img/page_head/bpharm_head.jpg',
    'tagline'=>'Career-focused pharmacy education with PCI-aligned laboratories, practical training, and admission guidance for B.Pharm and D.Pharm.',
    'courses'=>['b-pharm','d-pharm'],
    'principal'=>'The Pharmacy department focuses on strong academic foundations, laboratory discipline, ethical practice, and industry readiness for every student.',
    'brochure'=>'downloads/SCOP-Prospesctus.pdf',
    'placement'=>'A dedicated placement cell supports pharmacy students through industry connects, interview guidance, medical representative opportunities, hospital pharmacy exposure, and pharmaceutical company interactions.',
    'library'=>'Department-specific books include pharmaceutics, pharmacology, pharmaceutical chemistry, pharmacognosy, human anatomy, microbiology, pharmaceutical analysis, drug store management, and recent pharmacy reference titles.',
    'visits'=>'Industrial visits, hospital pharmacy exposure, pharmaceutical company interactions, and practical demonstrations help students understand the real medicine supply chain.',
    'eligibility'=>'B.Pharm / D.Pharm eligibility is based on 10+2 PCM / PCB and applicable admission norms.',
    'careers'=>['Registered Pharmacist','Hospital Pharmacist','Medical Representative','Quality Control Executive','Production Executive','Clinical Research Assistant','Retail Pharmacy Entrepreneur'],
    'labs'=>['pharmaceutics-lab','pharmaceutical-chemistry-lab','pharmacognosy-lab','pharmacology-lab','human-anatomy-physiology-lab','pharmacy-practice-lab','microbiology-biotechnology-lab','pharmaceutical-analysis-lab','machine-room'],
  ],
  'nursing' => [
    'name'=>'Nursing', 'short'=>'Sakshi College of Nursing and Paramedical Sciences', 'theme'=>'nursing', 'icon'=>'fa-user-nurse', 'image'=>'assets/img/headSCoI/Head-BScNursing.jpg',
    'tagline'=>'Clinical-care oriented nursing education with hospital exposure, simulation labs, skill training, and patient-care discipline.',
    'courses'=>['bsc-nursing','gnm'],
    'principal'=>'The Nursing department develops compassionate, disciplined, clinically aware, and professionally confident nursing students.',
    'brochure'=>'downloads/B.ScNursing_course_syllabus.pdf',
    'placement'=>'The nursing placement pathway is different from pharmacy and focuses on hospitals, clinical settings, community health roles, ward duties, and healthcare service opportunities.',
    'library'=>'Nursing library resources include fundamentals of nursing, medical-surgical nursing, community health, child health, midwifery, nutrition, anatomy, physiology, microbiology, and nursing procedure manuals.',
    'visits'=>'Hospital visits, clinical postings, community health visits, parent hospital exposure, and patient-care observations help students learn real healthcare responsibilities.',
    'eligibility'=>'B.Sc Nursing / GNM eligibility is based on applicable nursing admission norms, with Biology required where applicable.',
    'careers'=>['Staff Nurse','Ward Nurse','Community Health Nurse','Clinical Nurse','Home Healthcare Nurse','Nursing Tutor Pathway','Hospital Care Coordinator'],
    'labs'=>['nursing-foundation-lab','mch-obg-pediatrics-lab','community-health-nursing-lab','nutrition-lab','pre-clinical-science-lab','advanced-nursing-skill-lab','computer-av-aids-room'],
  ],
  'iti' => [
    'name'=>'I.T.I.', 'short'=>'Maharana Pratap College for Technical Skills', 'theme'=>'iti', 'icon'=>'fa-screwdriver-wrench', 'image'=>'assets/img/admission_cards/fitter.jpg',
    'tagline'=>'Skill-based technical education for job-oriented trades with workshop training, industrial exposure, and NCVT-aligned practical learning.',
    'courses'=>['iti-fitter','iti-electrician','iti-electronics-mechanic','iti-draughtsman-civil','iti-draughtsman-mechanical'],
    'principal'=>'The ITI department focuses on hands-on skill development, discipline, workshop safety, technical confidence, and employability.',
    'brochure'=>'downloads/MaharanPratap_ITI.pdf',
    'placement'=>'ITI placement is trade-specific and focuses on workshops, manufacturing units, electrical service roles, CAD/drafting offices, apprenticeships, and technical industry connections.',
    'library'=>'The ITI library includes trade theory, engineering drawing, workshop calculation, safety, employability skills, electrical machines, electronics, drafting, CAD, and industrial practice references.',
    'visits'=>'ITI students undertake trade-specific industrial visits, workshop exposure, technical demonstrations, and apprenticeship-oriented interactions.',
    'eligibility'=>'ITI eligibility is primarily 10th pass as per applicable NCVT/DGT trade norms.',
    'careers'=>['Fitter Technician','Electrician','Electronics Mechanic','Civil Draughtsman','Mechanical Draughtsman','Maintenance Assistant','Apprenticeship Candidate'],
    'labs'=>['fitter-workshop','measurement-metrology-section','drilling-grinding-station','electrical-wiring-lab','electrical-machines-lab','basic-electronics-station','electronics-basic-lab','digital-microcontroller-lab','communication-appliance-lab','civil-drafting-hall','civil-cad-computer-lab','surveying-instrument-room','mechanical-drafting-hall','mechanical-cad-solid-modeling-lab','basic-workshop-fitting-room'],
  ],
  'education' => [
    'name'=>'B.Ed.', 'short'=>'Maharana Pratap Teacher’s Training College', 'theme'=>'education', 'icon'=>'fa-chalkboard-user', 'image'=>'assets/img/page_head/Head-about-bed.jpg',
    'tagline'=>'Teacher training with pedagogy, practice teaching, school exposure, psychology resources, ICT training, and classroom-readiness.',
    'courses'=>['bed'],
    'principal'=>'The B.Ed. department prepares future teachers with values, classroom confidence, lesson planning, educational psychology, and practical school engagement.',
    'brochure'=>'downloads/MaharanPratap_B.Ed.pdf',
    'placement'=>'B.Ed. placement support focuses on school teaching opportunities, interview preparation, demo teaching, academic counselling, and education-sector career readiness.',
    'library'=>'The B.Ed. library includes pedagogy, educational psychology, curriculum studies, teaching-learning resources, school management, ICT in education, and subject-method books.',
    'visits'=>'B.Ed. students undertake school visits, practice teaching, classroom observation, educational tours, and lesson plan-based academic exposure, not industrial visits.',
    'eligibility'=>'B.Ed. eligibility is graduation as per university and admission norms.',
    'careers'=>['School Teacher','TGT/PGT Pathway','Academic Coordinator','Education Counsellor','Curriculum Assistant','Teaching Exam Aspirant'],
    'labs'=>['curriculum-laboratory','psychology-resource-centre','ict-computer-resource-centre','art-craft-resource-centre','health-physical-education-resource-centre'],
  ],
];

$departments = $departmentDetails;

$courses = [
  'b-pharm' => [
    'title'=>'B. Pharm', 'department'=>'Pharmacy','department_slug'=>'pharmacy','duration'=>'4 Years','eligibility'=>'10+2 with PCM / PCB with minimum eligibility as per applicable norms.','image'=>'assets/img/admission_cards/B_Pharm.jpg','theme'=>'pharma',
    'summary'=>'B.Pharm is a professional undergraduate pharmacy program for students who want to build careers in medicine, healthcare, drug manufacturing, quality control, hospital pharmacy, and pharmaceutical business.',
    'admission'=>'Admission guidance is provided for eligibility checking, document preparation, counselling, application support, and course selection.',
    'careers'=>['Pharmacist','Medical Representative','Quality Control Executive','Production Executive','Clinical Research Assistant','Drug Inspector pathway','Higher studies in M.Pharm / MBA'],
    'labs'=>['Pharmaceutics Laboratory','Pharmaceutical Chemistry Laboratory','Pharmacognosy Laboratory','Pharmacology Laboratory','Human Anatomy & Physiology Laboratory','Microbiology & Biotechnology Laboratory','Pharmaceutical Analysis Laboratory','Machine Room'],
    'approval'=>'PCI, New Delhi · BTE, Lucknow · AKTU, Lucknow'
  ],
  'd-pharm' => [
    'title'=>'D. Pharm','department'=>'Pharmacy','department_slug'=>'pharmacy','duration'=>'2 Years','eligibility'=>'10+2 with PCM / PCB with minimum eligibility as per applicable norms.','image'=>'assets/img/admission_cards/D_Pharm.jpg','theme'=>'pharma',
    'summary'=>'D.Pharm is a practical diploma course for students who want to enter the pharmacy profession, work in community pharmacy, hospital pharmacy, and build a career in drug dispensing and patient support.',
    'admission'=>'Students receive support for admission process, eligibility, documents, scholarship inquiry, and career counselling.',
    'careers'=>['Registered Pharmacist','Hospital Pharmacy Assistant','Retail Pharmacy Owner','Medical Store Management','Pharma Sales Executive','Community Pharmacy'],
    'labs'=>['Pharmaceutics Laboratory','Pharmaceutical Chemistry Laboratory','Pharmacognosy Laboratory','Pharmacology Laboratory','Human Anatomy & Physiology Laboratory','Pharmacy Practice Laboratory'],
    'approval'=>'PCI, New Delhi · BTE, Lucknow · AKTU, Lucknow'
  ],
  'bsc-nursing' => [
    'title'=>'B.Sc Nursing','department'=>'Nursing','department_slug'=>'nursing','duration'=>'4 Years','eligibility'=>'10+2 with Biology as per nursing admission norms.','image'=>'assets/img/admission_cards/B_Sc_Nursing.jpg','theme'=>'nursing',
    'summary'=>'B.Sc Nursing prepares students for professional nursing careers through classroom learning, simulation labs, clinical exposure, hospital training, and patient-care practice.',
    'admission'=>'Admission support includes eligibility guidance, document checklist, course counselling, scholarship inquiry, and online/offline form support.',
    'careers'=>['Staff Nurse','Community Health Nurse','ICU / Ward Nurse','Nursing Tutor pathway','Hospital Administrator pathway','Higher studies in M.Sc Nursing'],
    'labs'=>['Nursing Foundation Lab','Maternal and Child Health / OBG & Pediatrics Lab','Community Health Nursing Lab','Nutrition Lab','Pre-Clinical Science Lab','Advanced Nursing Skill Lab','Computer Lab / AV Aids Room'],
    'approval'=>'Uttar Pradesh State Medical Faculty · Atal Bihari Vajpayee Medical University'
  ],
  'gnm' => [
    'title'=>'G.N.M.','department'=>'Nursing','department_slug'=>'nursing','duration'=>'3 Years','eligibility'=>'10+2 as per GNM admission norms.','image'=>'assets/img/admission_cards/gnm.jpg','theme'=>'nursing',
    'summary'=>'GNM is designed for aspirants who want to pursue clinical nursing, patient-care support, community health work, and hospital-based career opportunities.',
    'admission'=>'Students can submit inquiry for counselling, eligibility, required documents, scholarship support, and admission procedure.',
    'careers'=>['General Nurse','Hospital Staff Nurse','Community Health Worker','Home Healthcare Nurse','Clinical Assistant','Public Health Support'],
    'labs'=>['Nursing Foundation Lab','MCH / OBG & Pediatrics Lab','Community Health Nursing Lab','Nutrition Lab','Computer Lab / AV Aids Room'],
    'approval'=>'Uttar Pradesh State Medical Faculty · Atal Bihari Vajpayee Medical University'
  ],
  'bed' => [
    'title'=>'B.Ed.','department'=>'B.Ed.','department_slug'=>'education','duration'=>'2 Years','eligibility'=>'Graduation as per university norms.','image'=>'assets/img/admission_cards/b_ed.jpg','theme'=>'education',
    'summary'=>'B.Ed. is a professional teacher-training program for graduates who want to build careers in teaching, education leadership, academic institutions, and school education.',
    'admission'=>'Admission support includes eligibility check, document checklist, university norms, form guidance, and career counselling.',
    'careers'=>['School Teacher','TGT / PGT pathway','Education Counsellor','Academic Coordinator','Curriculum Assistant','Teaching exam preparation'],
    'labs'=>['Curriculum Laboratory','Psychology Resource Centre','ICT / Computer Resource Centre','Art and Craft Resource Centre','Health and Physical Education Resource Centre'],
    'approval'=>'Chhatrapati Shahu Ji Maharaj University, Kanpur'
  ],
  'iti-fitter' => [
    'title'=>'ITI Fitter','department'=>'I.T.I.','department_slug'=>'iti','duration'=>'As per NCVT norms','eligibility'=>'10th pass as per applicable ITI norms.','image'=>'assets/img/admission_cards/fitter.jpg','theme'=>'iti',
    'summary'=>'ITI Fitter is a practical technical trade focused on fitting, assembly, maintenance, measurement, workshop discipline, and industrial employment readiness.',
    'admission'=>'Admission support includes trade selection, eligibility check, documents, form filling, and career guidance.',
    'careers'=>['Fitter Technician','Workshop Assistant','Maintenance Technician','Manufacturing Unit Technician','Apprenticeship Opportunities'],
    'labs'=>['Fitter Workshop','Measurement & Metrology Section','Drilling & Grinding Station'],
    'approval'=>'NCVT'
  ],
  'iti-electrician' => [
    'title'=>'ITI Electrician','department'=>'I.T.I.','department_slug'=>'iti','duration'=>'As per NCVT norms','eligibility'=>'10th pass as per applicable ITI norms.','image'=>'assets/img/admission_cards/ITI-Electrician.jpg','theme'=>'iti',
    'summary'=>'ITI Electrician trains students in domestic and industrial wiring, electrical machines, repair, testing, safety, and industry-ready electrical skills.',
    'admission'=>'Admission team helps students with eligibility, trade counselling, documents, and application support.',
    'careers'=>['Electrician','Electrical Maintenance Assistant','Wiring Technician','Industrial Electrical Support','Apprenticeship Opportunities'],
    'labs'=>['Electrical Wiring Lab','Electrical Machines Lab','Basic Electronics Station'],
    'approval'=>'NCVT'
  ],
  'iti-electronics-mechanic' => [
    'title'=>'ITI Electronics Mechanic','department'=>'I.T.I.','department_slug'=>'iti','duration'=>'As per NCVT norms','eligibility'=>'10th pass as per applicable ITI norms.','image'=>'assets/img/admission_cards/ITI-Electronics-Mechanic.jpg','theme'=>'iti',
    'summary'=>'ITI Electronics Mechanic develops ability in components, circuits, PCB work, testing, repairing, communication systems, and electronic appliance servicing.',
    'admission'=>'Students can connect for eligibility guidance, admission process, document requirement, and career guidance.',
    'careers'=>['Electronics Mechanic','Service Technician','Testing Assistant','Repair Technician','Apprenticeship Opportunities'],
    'labs'=>['Basic Electronics Lab','Digital & Microcontroller Lab','Communication & Appliance Lab'],
    'approval'=>'NCVT'
  ],
  'iti-draughtsman-civil' => [
    'title'=>'ITI Draughtsman – Civil','department'=>'I.T.I.','department_slug'=>'iti','duration'=>'As per NCVT norms','eligibility'=>'10th pass as per applicable ITI norms.','image'=>'assets/img/admission_cards/ITI-Draughtsman-Civil.jpg','theme'=>'iti',
    'summary'=>'ITI Draughtsman Civil prepares students for civil drawings, layouts, drafting, CAD, surveying awareness, and construction documentation.',
    'admission'=>'Admission guidance includes trade counselling, eligibility, documents, and form support.',
    'careers'=>['Civil Draughtsman','CAD Assistant','Site Drawing Assistant','Construction Office Assistant','Apprenticeship Opportunities'],
    'labs'=>['Drafting & Drawing Hall','CAD / Computer Lab','Surveying Instrument Room'],
    'approval'=>'NCVT'
  ],
  'iti-draughtsman-mechanical' => [
    'title'=>'ITI Draughtsman – Mechanical','department'=>'I.T.I.','department_slug'=>'iti','duration'=>'As per NCVT norms','eligibility'=>'10th pass as per applicable ITI norms.','image'=>'assets/img/admission_cards/ITI-Draughtsman-Mechanical.jpg','theme'=>'iti',
    'summary'=>'ITI Draughtsman Mechanical trains students in mechanical drawings, isometric projections, machine components, CAD, and solid modelling basics.',
    'admission'=>'Students receive support for eligibility, documents, admission application, and trade-specific career guidance.',
    'careers'=>['Mechanical Draughtsman','CAD Assistant','Production Drawing Assistant','Technical Documentation Assistant','Apprenticeship Opportunities'],
    'labs'=>['Drafting & Drawing Hall','CAD / Solid Modeling Lab','Basic Workshop / Fitting Room'],
    'approval'=>'NCVT'
  ]
];

$labs = [
  'pharmaceutics-lab'=>['department'=>'Pharmacy','title'=>'Pharmaceutics Laboratory','desc'=>'For dispensing, compounding, and formulating medicines as per Pharmacy Council of India-oriented practical learning.'],
  'pharmaceutical-chemistry-lab'=>['department'=>'Pharmacy','title'=>'Pharmaceutical Chemistry Laboratory','desc'=>'For synthesis, purification, and identification of medicinal compounds.'],
  'pharmacognosy-lab'=>['department'=>'Pharmacy','title'=>'Pharmacognosy Laboratory','desc'=>'For study of crude drugs of natural origin including plants, animals, and minerals.'],
  'pharmacology-lab'=>['department'=>'Pharmacy','title'=>'Pharmacology Laboratory','desc'=>'For studying drug actions, effects, biological responses, and computer-assisted simulations.'],
  'human-anatomy-physiology-lab'=>['department'=>'Pharmacy','title'=>'Human Anatomy & Physiology Laboratory','desc'=>'For studying human body structure and function using models, charts, microscopes, and practical demonstrations.'],
  'pharmacy-practice-lab'=>['department'=>'Pharmacy','title'=>'Pharmacy Practice Laboratory','desc'=>'A simulated community pharmacy environment for patient counselling and prescription handling.'],
  'microbiology-biotechnology-lab'=>['department'=>'Pharmacy','title'=>'Microbiology & Biotechnology Laboratory','desc'=>'For aseptic techniques, microbial testing, cell biology, and biotechnology basics, mainly useful for B.Pharm.'],
  'pharmaceutical-analysis-lab'=>['department'=>'Pharmacy','title'=>'Pharmaceutical Analysis Laboratory','desc'=>'Instrument-focused quality control learning with exposure to analysis practices and equipment concepts.'],
  'machine-room'=>['department'=>'Pharmacy','title'=>'Machine Room','desc'=>'Houses pharmaceutical manufacturing machinery such as tablet punch, coating pans, capsule filling machines, and production demonstrations.'],
  'nursing-foundation-lab'=>['department'=>'Nursing','title'=>'Nursing Foundation Lab','desc'=>'Core practical room simulating a hospital ward with mannequins, CPR dummies, and basic care equipment.'],
  'mch-obg-pediatrics-lab'=>['department'=>'Nursing','title'=>'MCH / OBG & Pediatrics Lab','desc'=>'Equipped with delivery simulators, incubators, and pediatric mannequins for midwifery and child-care practice.'],
  'community-health-nursing-lab'=>['department'=>'Nursing','title'=>'Community Health Nursing Lab','desc'=>'Includes community bags, flashcards, family folders, and models for public health simulation.'],
  'nutrition-lab'=>['department'=>'Nursing','title'=>'Nutrition Lab','desc'=>'A clinical kitchen for teaching therapeutic diet preparation and nutritional planning.'],
  'pre-clinical-science-lab'=>['department'=>'Nursing','title'=>'Pre-Clinical Science Lab','desc'=>'Combined practical support for anatomy, physiology, and microbiology with skeletons, specimens, and microscopes.'],
  'advanced-nursing-skill-lab'=>['department'=>'Nursing','title'=>'Advanced Nursing Skill Lab','desc'=>'For critical-care simulation, IV insertion practice, and advanced life support demonstrations.'],
  'computer-av-aids-room'=>['department'=>'Nursing','title'=>'Computer Lab / AV Aids Room','desc'=>'For digital health record exposure, presentations, and technology-enabled nursing learning.'],
  'fitter-workshop'=>['department'=>'ITI','title'=>'Fitter Workshop','desc'=>'Primary hands-on area with heavy-duty workbenches, bench vices, files, hacksaws, and basic lathes.'],
  'measurement-metrology-section'=>['department'=>'ITI','title'=>'Measurement & Metrology Section','desc'=>'Precision measuring instruments such as Vernier calipers, micrometers, and dial gauges.'],
  'drilling-grinding-station'=>['department'=>'ITI','title'=>'Drilling & Grinding Station','desc'=>'Dedicated practical area for bench drills and pedestal grinders.'],
  'electrical-wiring-lab'=>['department'=>'ITI','title'=>'Electrical Wiring Lab','desc'=>'Practice setup for domestic and industrial wiring systems, conduit work, and switchboard assembly.'],
  'electrical-machines-lab'=>['department'=>'ITI','title'=>'Electrical Machines Lab','desc'=>'AC/DC motors, generators, transformers, and load-bank practical learning.'],
  'basic-electronics-station'=>['department'=>'ITI','title'=>'Basic Electronics Station','desc'=>'For soldering, circuit building, multimeter use, and basic electronics practice.'],
  'electronics-basic-lab'=>['department'=>'ITI','title'=>'Basic Electronics Lab','desc'=>'For learning components such as resistors, capacitors, diodes, and PCB fabrication basics.'],
  'digital-microcontroller-lab'=>['department'=>'ITI','title'=>'Digital & Microcontroller Lab','desc'=>'Equipped for logic trainers, CROs, function generators, and microprocessor kit exposure.'],
  'communication-appliance-lab'=>['department'=>'ITI','title'=>'Communication & Appliance Lab','desc'=>'For testing and repairing consumer electronics, TVs, and communication equipment.'],
  'civil-drafting-hall'=>['department'=>'ITI','title'=>'Civil Drafting & Drawing Hall','desc'=>'Spacious room with adjustable drafting tables, mini-drafters, and drawing practice space.'],
  'civil-cad-computer-lab'=>['department'=>'ITI','title'=>'Civil CAD / Computer Lab','desc'=>'Computer-based drafting practice with AutoCAD/Revit/STAAD-type learning environment.'],
  'surveying-instrument-room'=>['department'=>'ITI','title'=>'Surveying Instrument Room','desc'=>'Practice and storage area for theodolites, auto levels, dumpy levels, and total station exposure.'],
  'mechanical-drafting-hall'=>['department'=>'ITI','title'=>'Mechanical Drafting & Drawing Hall','desc'=>'Mechanical drafting tables for orthographic and isometric projection practice.'],
  'mechanical-cad-solid-modeling-lab'=>['department'=>'ITI','title'=>'CAD / Solid Modeling Lab','desc'=>'Computer lab for AutoCAD, SolidWorks, CATIA-type mechanical design and assembly practice.'],
  'basic-workshop-fitting-room'=>['department'=>'ITI','title'=>'Basic Workshop / Fitting Room','desc'=>'Hands-on exposure for understanding the mechanical parts students draw and design.'],
  'curriculum-laboratory'=>['department'=>'B.Ed.','title'=>'Curriculum Laboratory: Science & Mathematics','desc'=>'Contains physical science, biological science, and math kits for student-teachers to practice classroom demonstrations.'],
  'psychology-resource-centre'=>['department'=>'B.Ed.','title'=>'Psychology Resource Centre','desc'=>'Equipped with psychological testing apparatus, questionnaires, inventories, and aptitude assessment resources.'],
  'ict-computer-resource-centre'=>['department'=>'B.Ed.','title'=>'ICT / Computer Resource Centre','desc'=>'Educational technology and digital pedagogy resources for presentation and classroom technology training.'],
  'art-craft-resource-centre'=>['department'=>'B.Ed.','title'=>'Art and Craft Resource Centre','desc'=>'Creative space for visual arts, chart making, model building, and classroom teaching aids.'],
  'health-physical-education-resource-centre'=>['department'=>'B.Ed.','title'=>'Health and Physical Education Resource Centre','desc'=>'First-aid equipment, yoga mats, and basic sports gear to support physical wellness teaching.']
];

$blogs = [
  'career-after-bpharm-dpharm' => ['title'=>'Career Opportunities After B.Pharm and D.Pharm','category'=>'Pharmacy','image'=>'assets/img/admission_cards/B_Pharm.jpg','excerpt'=>'Explore pharmacy career paths in hospitals, retail pharmacy, pharma companies, clinical research, and higher studies.'],
  'why-nursing-respected-career' => ['title'=>'Why Nursing Is One of the Most Respected Career Choices','category'=>'Nursing','image'=>'assets/img/admission_cards/B_Sc_Nursing.jpg','excerpt'=>'Nursing offers dignity, service, employability, and long-term growth in healthcare.'],
  'bed-admission-guide' => ['title'=>'B.Ed. Admission Guide for Future Teachers','category'=>'Education','image'=>'assets/img/admission_cards/b_ed.jpg','excerpt'=>'Understand eligibility, admission process, teaching career pathways, and how B.Ed. shapes future educators.'],
  'iti-courses-after-10th' => ['title'=>'ITI Courses After 10th: Best Skill-Based Career Options','category'=>'ITI','image'=>'assets/img/admission_cards/fitter.jpg','excerpt'=>'ITI trades help students build job-ready technical skills for industrial and service-sector careers.'],
  'choose-right-course-after-10th-12th' => ['title'=>'How to Choose the Right Course After 10th or 12th','category'=>'Admission Guidance','image'=>'assets/img/admission_online.jpg','excerpt'=>'A practical guide for students and parents to choose Pharmacy, Nursing, B.Ed., or ITI with clarity.'],
  'industrial-visit-haridwar' => ['title'=>'Industrial Visit to Haridwar: Learning Beyond Classrooms','category'=>'Industrial Visit','image'=>'assets/img/Industrial_Visit_Head.jpg','excerpt'=>'Industrial exposure helps students understand practical pharmacy and technical career environments.'],
  'hospital-visit-kanpur' => ['title'=>'Hospital Visit: Clinical Learning for Healthcare Students','category'=>'Hospital Visit','image'=>'assets/img/hospital_visit_JL_head.jpg','excerpt'=>'Hospital visits help healthcare students connect theory with real patient-care environments.']
];

$galleryCategories = [
  'life'=>'Life@SGoI', 'sports'=>'Sports', 'annual-fest'=>'Annual Fest', 'pharmacy-day'=>'Pharmacy Day', 'pharmacists-day'=>'Pharmacists Day', 'events'=>'Other Events', 'pharmacy'=>'Pharmacy', 'nursing'=>'Nursing', 'iti'=>'ITI'
];
$galleryImages = [
  ['assets/img/Campus_Building.jpg','Life@SGoI','life'], ['assets/img/home/MainHead.jpg','Campus Life','life'], ['assets/img/gallery/pharmacy/DSC_0242.jpg','Pharmacy Practical','pharmacy'], ['assets/img/gallery/pharmacy/IMG-20220603-WA0021.jpg','Pharmacy Activity','pharmacy'], ['assets/img/gallery/nursing/IMG-20230203-WA0019.jpg','Nursing Training','nursing'], ['assets/img/gallery/nursing/WhatsApp Image 2023-02-11 at 4.56.22 PM.jpeg','Nursing Event','nursing'], ['assets/img/gallery/iti/ITI1.jpg','ITI Workshop','iti'], ['assets/img/gallery/iti/ITI2.jpg','ITI Practical','iti'], ['assets/img/b.ed/certificate_distribution.jpg','B.Ed. Activity','events'], ['assets/img/b.ed/educational_tour.jpg','Educational Tour','events'], ['assets/img/Placement-Drive-29-04-2023.jpg','Placement Drive','events'], ['assets/img/hospital_visit_JL_head.jpg','Hospital Visit','events'], ['assets/img/Industrial_Visit_Head.jpg','Industrial Visit','events']
];

$downloads = [
  ['title'=>'SCOP Prospectus','file'=>'downloads/SCOP-Prospesctus.pdf','type'=>'Brochure'],
  ['title'=>'Admission Form','file'=>'downloads/Admission-Form.pdf','type'=>'Form'],
  ['title'=>'Documents Required','file'=>'downloads/Documents-Required.jpg','type'=>'Checklist'],
  ['title'=>'B.Pharm Syllabus','file'=>'downloads/Bachelor-of-Pharmacy-syllabus.pdf','type'=>'Syllabus'],
  ['title'=>'D.Pharm Syllabus','file'=>'downloads/DPharmaSyllabus.pdf','type'=>'Syllabus'],
  ['title'=>'B.Sc Nursing Syllabus','file'=>'downloads/B.ScNursing_course_syllabus.pdf','type'=>'Syllabus'],
  ['title'=>'GNM Syllabus','file'=>'downloads/GNM-Syllabus.pdf','type'=>'Syllabus'],
  ['title'=>'B.Ed Brochure','file'=>'downloads/MaharanPratap_B.Ed.pdf','type'=>'Brochure'],
  ['title'=>'ITI Brochure','file'=>'downloads/MaharanPratap_ITI.pdf','type'=>'Brochure']
];

$facilities = [
  ['title'=>'Wi-fi Campus','icon'=>'fa-wifi','desc'=>'Connected campus support for academic and digital learning.'],
  ['title'=>'Computer Lab','icon'=>'fa-computer','desc'=>'Computer facilities for digital learning, forms, presentations, and technical training.'],
  ['title'=>'Canteen','icon'=>'fa-mug-saucer','desc'=>'Student-friendly refreshment and break-time facility.'],
  ['title'=>'Transport','icon'=>'fa-bus','desc'=>'Affordable transport support on multiple Kanpur and nearby routes.'],
  ['title'=>'Library','icon'=>'fa-book-open','desc'=>'Department-specific academic books, journals, references, and reading support.'],
  ['title'=>'Hostel Boys & Girls','icon'=>'fa-building-user','desc'=>'Separate hostel support for boys and girls as per availability and rules.'],
  ['title'=>'Personal Assistance','icon'=>'fa-user-check','desc'=>'Admission and student support assistance for students and parents.'],
  ['title'=>'Herbal Garden','icon'=>'fa-leaf','desc'=>'Useful for pharmacy learning and medicinal plant awareness.'],
  ['title'=>'Seminar Hall','icon'=>'fa-chalkboard','desc'=>'Seminar, guest lecture, workshop, and presentation space.']
];

$committees = [
  'contact'=>'Contact Us', 'admission'=>'Admission Department', 'grievance'=>'Grievance Redressal Cell', 'icc'=>'Internal Complaints Committee', 'anti-ragging'=>'Anti Ragging Committee', 'anti-discrimination'=>'Anti-Discrimination Cell', 'gender'=>'Gender Sensitization Committee'
];
?>

<?php /* V8 additional structured content */
$managementMessages = [
  'chairperson' => ['title'=>'Message From Chairperson','name'=>'Chairperson','image'=>'assets/img/management/chairman.jpg','quote'=>'Education becomes meaningful when it creates confidence, skill, discipline and service-minded professionals.','body'=>'Sakshi Group of Institutions has been shaped with a commitment to practical education, ethical values and career-focused learning. Our aim is to help students from Kanpur and nearby regions choose the right professional path with clarity and confidence.'],
  'secretary' => ['title'=>'Message From Secretary','name'=>'Secretary','image'=>'assets/img/management/secretary.png','quote'=>'A student should not only complete a course, but should become ready for life, work and responsibility.','body'=>'Our focus is to build an environment where academic learning is supported by laboratories, mentoring, exposure visits, placement support and personal guidance. Every department has its own learning path and its own responsibility towards students.'],
  'principal_pharmacy' => ['title'=>'Message From Principal - Pharmacy','name'=>'Principal, Pharmacy','image'=>'assets/img/management/principal.jpg','quote'=>'Pharmacy education requires accuracy, ethics, discipline and practical understanding.','body'=>'The Pharmacy department focuses on strong fundamentals, lab discipline, PCI-aligned academic exposure, pharmacy practice and career readiness for B.Pharm and D.Pharm students.'],
  'principal_nursing' => ['title'=>'Message From Principal - Nursing','name'=>'Principal, Nursing','image'=>'assets/img/headSCoI/Head-Principal.jpg','quote'=>'Nursing education is a blend of knowledge, compassion and clinical confidence.','body'=>'The Nursing department guides students through skill labs, clinical exposure, hospital training and patient-care readiness so they can grow as responsible healthcare professionals.'],
  'principal_iti' => ['title'=>'Message From Principal - ITI','name'=>'Principal, ITI','image'=>'assets/img/management/Principal_B.Ed._ITI.jpeg','quote'=>'Technical skill becomes powerful when students learn by doing.','body'=>'The ITI department provides trade-specific practical exposure, workshop discipline, measurement skills, industrial readiness and placement support for skill-based careers.'],
  'principal_bed' => ['title'=>'Message From Principal - B.Ed.','name'=>'Principal, B.Ed.','image'=>'assets/img/management/Principal_B.Ed._ITI.jpeg','quote'=>'A good teacher shapes not only a classroom, but the direction of society.','body'=>'The B.Ed. department focuses on teaching skills, psychology, curriculum understanding, school exposure, ICT resources and classroom confidence for future educators.'],
];

$labImageMap = [
  'pharmaceutics-lab'=>'assets/img/labs/pharmaceutics_lab.jpg',
  'pharmaceutical-chemistry-lab'=>'assets/img/labs/pharmaceutical_chemistry_lab.jpg',
  'pharmacognosy-lab'=>'assets/img/labs/pharmacognosy_lab.jpg',
  'pharmacology-lab'=>'assets/img/labs/pharmacology_lab.jpg',
  'human-anatomy-physiology-lab'=>'assets/img/labs/Human_Anatomy_Physiology_Lab.jpg',
  'pharmacy-practice-lab'=>'assets/img/labs/practical-Labs.jpg',
  'microbiology-biotechnology-lab'=>'assets/img/labs/Pharmaceutical_Microbiology_Lab.jpg',
  'pharmaceutical-analysis-lab'=>'assets/img/labs/pharmaceutical_analysis_lab.jpg',
  'machine-room'=>'assets/img/labs/Machine_Room.jpg',
  'nursing-foundation-lab'=>'assets/img/labs/nursing_foundation_lab.jpg',
  'mch-obg-pediatrics-lab'=>'assets/img/labs/nursing_labs.jpg',
  'community-health-nursing-lab'=>'assets/img/labs/COMMUNITY_HEALTH_NURSING_LABORATORY.jpg',
  'nutrition-lab'=>'assets/img/labs/NUTRITION_LABORATORY.jpg',
  'pre-clinical-science-lab'=>'assets/img/labs/pre_clinical.jpg',
  'advanced-nursing-skill-lab'=>'assets/img/labs/ADVANCE_SKILL_LABORATORY.jpg',
  'computer-av-aids-room'=>'assets/img/labs/computer_lab.jpg',
  'fitter-workshop'=>'assets/img/labs/FL 1.jpg',
  'measurement-metrology-section'=>'assets/img/gallery/iti/ITI1.jpg',
  'drilling-grinding-station'=>'assets/img/gallery/iti/ITI2.jpg',
  'electrical-wiring-lab'=>'assets/img/labs/EL 1.jpg',
  'electrical-machines-lab'=>'assets/img/page_head/HeadElectrician.jpg',
  'basic-electronics-station'=>'assets/img/page_head/HeadElectronicsMechanic.jpg',
  'electronics-basic-lab'=>'assets/img/page_head/HeadElectronicsMechanic.jpg',
  'digital-microcontroller-lab'=>'assets/img/labs/computer_lab.jpg',
  'communication-appliance-lab'=>'assets/img/gallery/iti/iti0.jpg',
  'civil-drafting-hall'=>'assets/img/labs/Draughtsman - Civil.jpg',
  'civil-cad-computer-lab'=>'assets/img/labs/computer_lab.jpg',
  'surveying-instrument-room'=>'assets/img/page_head/headDraughtsmanCivil.jpg',
  'mechanical-drafting-hall'=>'assets/img/labs/Draughtsman-Mechanical.jpg',
  'mechanical-cad-solid-modeling-lab'=>'assets/img/labs/computer_lab.jpg',
  'basic-workshop-fitting-room'=>'assets/img/gallery/iti/ITI1.jpg',
  'curriculum-laboratory'=>'assets/img/b.ed/BEd.jpg',
  'psychology-resource-centre'=>'assets/img/icons/lecture.png',
  'ict-computer-resource-centre'=>'assets/img/home/computer_Lab.jpg',
  'art-craft-resource-centre'=>'assets/img/b.ed/certificate_distribution.jpg',
  'health-physical-education-resource-centre'=>'assets/img/b.ed/educational_tour.jpg',
];

$infrastructureOverview = [
  ['title'=>'Academic Blocks','image'=>'assets/img/Campus_Building.jpg','desc'=>'Purpose-built academic spaces for classroom learning, counselling and department interaction.'],
  ['title'=>'Department Labs','image'=>'assets/img/labs/head_labs.jpg','desc'=>'Separate practical spaces for Pharmacy, Nursing, ITI and B.Ed. resources.'],
  ['title'=>'Library & Reading Support','image'=>'assets/img/home/library.jpg','desc'=>'Department-wise books, references and academic resources for focused learning.'],
  ['title'=>'Computer Lab','image'=>'assets/img/home/computer_Lab.jpg','desc'=>'Digital learning support for applications, presentations, ITI CAD and ICT training.'],
  ['title'=>'Seminar Hall','image'=>'assets/img/page_head/seminar_hall.jpg','desc'=>'Guest lectures, workshops, orientation sessions and student activities.'],
  ['title'=>'Transport & Hostel','image'=>'assets/img/page_head/hostel_1.jpg','desc'=>'Support facilities for students requiring travel and accommodation assistance.'],
];

$placementCompanies = [
  'pharmacy'=>['East India Pharmaceutical Works Ltd','Healthcare Pharmacy Networks','Hospital Pharmacy Units','Retail Pharmacy Chains','Medical Representative Roles'],
  'nursing'=>['Partner Hospitals','Clinical Training Centres','Nursing Homes','Community Health Setups','Healthcare Service Providers'],
  'iti'=>['Manufacturing Units','Electrical Service Firms','Workshop Partners','Civil Drafting Offices','Mechanical Service Units'],
  'education'=>['Schools','Coaching Institutions','Education Support Centres','Primary & Secondary Teaching Roles','Academic Administration'],
];
?>
