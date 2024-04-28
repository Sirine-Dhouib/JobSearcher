-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 28, 2024 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Healthcare', 'healthcare', '1', '2024-04-26 11:34:42', '2024-04-26 11:34:42'),
(2, 'Medical Services', 'medical-services', '1', '2024-04-26 11:34:42', '2024-04-26 11:34:42'),
(3, 'Technology', 'technology', '1', '2024-04-26 11:34:42', '2024-04-26 11:34:42'),
(4, 'Software Development', 'software-development', '1', '2024-04-26 11:34:42', '2024-04-26 11:34:42'),
(5, 'Education', 'education', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43'),
(6, 'Engineering', 'engineering', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43'),
(7, 'Creative and Design', 'creative-and-design', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43'),
(8, 'Research and Development', 'research-and-development', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43'),
(9, 'Hospitality and Tourism', 'hospitality-and-tourism', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43'),
(10, 'Business and Management', 'business-and-management', '1', '2024-04-26 11:34:43', '2024-04-26 11:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `cname`, `slug`, `address`, `phone`, `website`, `logo`, `banner`, `slogan`, `description`, `created_at`, `updated_at`) VALUES
(209, 154, 'Ciena Healthcare', 'ciena-healthcare', 'Tunisia , Sousse', '55552012361', 'https://www.cienahealthcare.com/', '1714147522.jpg', '1714147554.jpg', 'We\'re all about you.', 'Wondering what defines a great skilled nursing and rehabilitation facility? With managing award-winning healthcare facilities in multiple states and decades of experience under our belt we can give you a short answer; it\'s all about peace of mind.', '2024-04-26 13:55:47', '2024-04-26 15:12:15'),
(210, 155, 'Healthfirst', 'healthfirst', 'Sfax , Tunisia', '98745124', 'https://healthfirst.org/', '1714148767.jpg', '1714148780.jpg', 'Helping people access affordable health insurance.', 'Healthfirst, one of Tunisia’s largest not-for-profit health insurance companies, has earned the trust of close to 2 million members by ensuring access to affordable and high-quality healthcare.', '2024-04-26 15:23:12', '2024-04-26 15:26:20'),
(211, 156, 'Penske Motor Group', 'penske-motor-group', 'Hammamet , Tunisia', '56789541', 'https://www.penskemotorgroup.com/', '1714150113.jpg', '1714150103.jpg', 'Shift Your Career Into Overdrive JOIN A WINNING TEAM AT PENSKE MOTOR GROUP', 'We created \"The Penske Way\" which is a group of twenty underlying principles that are focused on our Guests, Team Members and Reputation. Based on these underlying principles, we have established a portfolio over the years which consist of several premiere and award-winning dealerships in the California market with Toyota and Lexus. In addition to having the best products, we have also built the best team whose average tenure among all our locations is approximately 10 years.', '2024-04-26 15:45:20', '2024-04-26 15:48:33'),
(212, 157, 'Toyota', 'toyota', 'Gabès , Tunisia', '74415785', 'https://www.toyota.com/', '1714151209.jpg', '1714151218.jpg', 'Be part of something greater.', 'Be part of something greater.', '2024-04-26 15:58:26', '2024-04-26 16:06:58'),
(213, 158, 'SUMMIT PUBLIC SCHOOLS', 'summit-public-schools', 'Mahdiya , Tunisia', '74851236', 'https://summitps.org/', '1714154524.jpg', '1714154534.jpg', 'Equipping every child to live a fulfilled life.', 'We believe that every child is capable of college and career success. Summit Public Schools is a leading network of public schools that collectively prepares a diverse community of young people with the skills, knowledge, and habits to attain economic empowerment and success in a chosen concrete next step towards a fulfilled life.\r\n\r\nWe founded our inaugural school, Summit Prep, in 2003. Today, we are proud to operate some of the best public schools in the country, serving diverse communities throughout California and Washington states.', '2024-04-26 17:00:07', '2024-04-26 17:07:44'),
(214, 159, 'ATS Advanced Technology Services', 'ats-advanced-technology-services', 'Sfax , Tunisia', '74632526', 'https://www.advancedtech.com/', '1714155252.jpg', '1714155264.jpg', 'Single Source for Industrial Maintenance, Technology & Parts', 'With nearly four decades of experience, manufacturers trust Advanced Technology Services (ATS) to increase uptime, improve asset reliability and reduce manufacturing costs.', '2024-04-26 17:12:32', '2024-04-26 17:14:24'),
(215, 160, 'Equinix', 'equinix', 'Monastir , Tunisia', '74851236', 'https://www.equinix.com/', '1714156323.jpg', '1714156338.jpg', 'Digital infrastructure to power your AI transformation', 'As the world’s digital infrastructure company®, we connect places, partners and possibilities.', '2024-04-26 17:28:41', '2024-04-26 17:32:18'),
(216, 161, 'FLATIRON HEALTH', 'flatiron-health', 'Sfax , Tunisia', '74851236', 'https://flatiron.com/', '1714156819.jpg', '1714156835.jpg', 'Reimagining the infrastructure of cancer care', 'We provide solutions across the industry to learn from and improve every person’s experience with cancer. See how we’re:\r\nDesigning and operating better clinical trials\r\nAccelerating drug development and access\r\nPowering smarter care', '2024-04-26 17:35:40', '2024-04-26 17:40:35'),
(217, 162, 'American Express', 'american-express', 'Sousse , Tunisia', '74851236', 'https://www.americanexpress.com/', '1714157433.jpg', '1714157444.jpg', 'Reserve Your Piece of History', 'American Express is a global services company, providing customers with exceptional access to products, insights, and experiences that enrich lives and build business success.', '2024-04-26 17:47:51', '2024-04-26 17:50:44'),
(218, 163, 'Esri', 'esri', 'Nabeul , Tunisia', '74851412', 'https://www.esri.com/en-us/home', '1714162481.jpg', '1714162502.jpg', 'Geospatial context takes digital twins to the next level', 'Esri is the world leader in geographic information system (GIS) software development and believes The Science of Where can transform society by unlocking data\'s full potential in every organization.', '2024-04-26 19:12:32', '2024-04-26 19:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(6, 164, 416, '2024-04-26 20:31:47', '2024-04-26 20:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `company_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `roles` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `featured` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number_of_vacancy` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `company_id`, `title`, `slug`, `description`, `roles`, `category_id`, `position`, `address`, `featured`, `type`, `status`, `last_date`, `deleted_at`, `created_at`, `updated_at`, `number_of_vacancy`, `experience`, `gender`, `salary`) VALUES
(409, '154', '209', 'Registered Nurse (RN) 2000 TND for full-time and 1000 TND  for part-time Retention Bonus-.', 'registered-nurse-rn-2000-tnd-for-full-time-and-1000-tnd-for-part-time-retention-bonus', 'Current Licensed RN Registered Nurse, licensure in the state.\r\nCPR certification.\r\nor acceptable exemption required.\r\nAbout Laurel Health Care Company\r\nLaurel Health Care Company is a national provider of skilled nursing, sub-acute, rehabilitative, and assisted living services dedicated to achieving the highest standards of care.\r\nAt The Laurels, caring is more than providing excellent medical and guest services. It\'s also being a companion and treating each guest with the utmost dignity, respect and compassion. It\'s what we call \"The Laurel Way of Caring\", and it comes from within each one of us.', 'The RN plans, coordinates, provides and manages nursing care services and health education to nursing home guests.\r\n\r\nSupervise the care/services provided by Certified Nursing Assistants (CNA), and other team members who care for guests.\r\nProvide safe and accurate medication-related interventions to guests.\r\nAssess the health of guests and notify the physician of changes in status. Promptly implement new orders.\r\nSelect and institute appropriate nursing interventions to stabilize a guest’s condition and/or prevent complications.\r\nContribute to the guest’s assessment (MDS/CAA’s) and the development of a plan of care.', 1, 'Registered Nurse (RN)', 'Tunisia , Sousse', 0, 'fulltime', 1, '2024-04-30', NULL, '2024-04-26 15:11:07', '2024-04-26 15:12:35', 6, 2, 'female', '2000-5000'),
(410, '154', '209', 'Clinician', 'clinician', 'Clinician Requirements:\r\n• Must have one of the following: LAC, LPC, LSW or LCSW\r\n• License or certification, clean and active\r\n• New graduates welcome\r\n• Experience conducting group sessions\r\n• Flexibility and willingness are great attributes\r\n\r\nClinician Schedule:\r\n• Full Time\r\n• 1PM - 9:30PM\r\n\r\nClinician Compensation:\r\nHourly rate competitive with experience and location\r\n\r\nFull time employees may be eligible for the following:\r\n• Insurance: Medical, Dental, Vision, and STD options\r\n• Medical FSA and Dependent Care Account\r\n• 401k with company match up to 5%\r\n• Accrued PTO Plan\r\n• Education reimbursement\r\n• Career Advancement Opportunities', 'Clinician Duties/Responsibilities:\r\n• New patient intake and orientation\r\n• Conducts initial assessment of patient problems and needs and reports to clinical team to initiate treatment planning\r\n• Conducts individual sessions\r\n Facilitates groups with patients\r\n• Addresses patient\'s concerns and helps eliminate possibility of AMA\r\n• Provides Case Management\r\n• Provides tours for prospective patients and their families as requested.\r\n• Documentation in patient medical record', 1, 'Clinician', 'Tunisia , Sousse', 0, 'fulltime', 1, '2024-05-07', NULL, '2024-04-26 15:16:38', '2024-04-26 15:16:53', 2, 3, 'male', '2000-5000'),
(411, '154', '209', 'Senior Healthcare Analyst', 'senior-healthcare-analyst', 'As a Senior Healthcare Analyst within Medical Economics, you will manage projects from analysis to implementation and beyond, ensuring that results are achieved, and leadership is aware of the unique headwinds and tailwinds faced by any initiative. The ability to simplify complex scenarios into key takeaways is essential, as is the ability to explain and drill into any given detail behind the analyses you create. You\'ll be expected to make independent decisions and support them under scrutiny. Potential areas of analysis include payment policy, utilization management, and value-based payment arrangements. The ideal candidate will be eager to learn, excited to grow, ready for a challenge, and able to thrive in a collaborative and collegial work environment.', 'Positioned within the Medical Economics department, the Medical Cost team values, implements, and tracks initiatives aimed at producing savings and bending cost trends. The team is empowered with the resources it needs to produce results and deliver impactful business recommendations. As a Senior Medical Economics Analyst, you\'ll map out and construct detailed analyses, confront challenging and unfamiliar subjects, and interface with stakeholders across all departments and lines of business. The conclusions you reach have the potential to improve and influence the organization, playing an essential part in our mission to provide members with affordable and accessible high-quality care.', 1, 'Senior Healthcare Analyst', 'Tunisia , Sousse', 0, 'fulltime', 1, '2024-04-30', NULL, '2024-04-26 15:18:47', '2024-04-26 15:19:01', 1, 6, 'any', 'negotiable'),
(412, '155', '210', 'Respiratory Complex Care Manager', 'respiratory-complex-care-manager', 'Duties/Responsibilities:\r\n\r\n• Advocates, informs, and educates beneficiaries on services, self-management techniques, and health benefits.\r\n\r\n• Conducts assessments to identify barriers and opportunities for intervention, including addressing the social determinants of health\r\n\r\n• Develops interdisciplinary care plans that align with the provider\'s treatment plans and recommends interventions that align with proposed goals.\r\n\r\n• Generates referrals to providers, community-based resources, and appropriate services and other resources to assist in goal achievement.\r\n\r\n• Collaborates with provider doctors, social workers, discharge planners, and community-based service providers to coordinate care accordingly.\r\n\r\n• Coordinates and facilitates with the multi-disciplinary health care team as necessary to ensure care plan goals are achieved and maximize member outcomes.\r\n\r\nAssists in identifying opportunities for alternative care options based on member needs and assessments.\r\n\r\n• Evaluates service authorizations to ensure alignment and execution of the member\'s care and physician treatment plan.\r\n\r\n• Contributes to corporate goals through ongoing execution of member care plans and member goal achievement.\r\n\r\n•Documents all encounters with providers, members, and vendors in the appropriate system in accordance with internal and established documentation procedures; follows up as needed; and updates care plans based on member needs, as appropriate.\r\n\r\n• Occasional overtime as necessary.\r\n\r\n• Additional duties as assigned.', 'The Care Manager works with members, care givers and/or providers to ensure appropriate access to care, adherence to treatment plans and improvement in outcomes.\r\nThe Care Manager is responsible for applying care management and health equity principles when engaging members and addressing coordination of the member\'s health care services. The Care Manager will oversee a panel of members for whom he/she is the primary case owner. The Care Manager will be responsible for tracking their assigned panel of members and intervening as needed to close care gaps, reducing unnecessary hospitalizations or ER visits, addressing social risk factors and reducing health inequities.', 2, 'Respiratory Complex Care Manager', 'Sfax , Tunisia', 0, 'fulltime', 1, '2024-05-11', NULL, '2024-04-26 15:28:34', '2024-04-26 15:51:49', 3, 4, 'any', 'negotiable'),
(413, '156', '211', 'IT Service Desk Technician', 'it-service-desk-technician', 'Major Responsibilities:\r\n\r\n• Provide first level troubleshooting skills to resolve general internal Penske system support issues with Penske\'s corporate office and field location users via telephone and remote communication tools.\r\n\r\n• Work on special projects and laptop software configuration\r\n\r\n• Log all support calls into the call tracking system\r\n\r\n• Work with programming staff to communicate software issues\r\n\r\n• Follow-up with callers to ensure customer satisfaction\r\n\r\n• Other projects and tasks as assigned by supervisor', 'A Penske IT Service Desk Technician provides technical support to Penske\'s PC users in both corporate and field locations on a daily basis. This support may consist of both hardware and software trouble shooting and problem-solving resolution. The IT Service Desk Technician is to research and follow-up on problems that may require additional resources.', 3, 'IT Service Desk Technician', 'Hammamet , Tunisia', 0, 'fulltime', 1, '2024-06-19', NULL, '2024-04-26 15:49:57', '2024-04-26 17:18:59', 2, 6, 'male', '10000-20000'),
(414, '157', '212', 'Software Engineer - Backend', 'software-engineer-backend', 'What you\'ll be doing\r\n\r\nDevelop and maintain customizations to our commercial treasury management system known as Wallstreet Suite 7.4 using Java, SQL (Oracle), Python, and Unix (basic navigation, administration, and shell scripting).\r\nDevelop and update interfaces using, Java, SQL and shell scripting\r\nConfigure and Support our SWIFT infrastructure using knowledge of Unix (basic navigation, administration, and shell scripting).\r\nLead discussions with development and business teams regarding implementation and design of business processes.\r\nConfigure and support treasury applications for Treasury, Risk Management, Cash Management and Treasury Accounting operations.\r\nEnsure appropriate testing and/or approval processes are documented for banking, or accounting related static data additions or modification for treasury and commercial transactions in accordance with SOX requirements.\r\nParticipate on teams for vendor system implementations, including system support coordination and maintenance\r\nOwn the systems you develop and customize, providing second level support for any and all technical issues arising in Production environments\r\nDebug and modify issues related to application customizations.', 'The Toyota Financial Services (TFS) Treasury Systems team is looking for a passionate and highly-motivated Software Engineer - Backend. Reporting to the Treasury Technology Operations Manager, the Software Engineer - Backend is a highly flexible programmer who is very comfortable working with imperfect information. This position is very familiar with object oriented and procedural programming concepts, relational databases, and web-based as well as client-server application frameworks. Just as important this position requires a developer that is curious and willing to dive deep into business concepts and processes unrelated to programming in order to deliver highly relevant solutions. Though there is no expectation for candidates to have Treasury specific knowledge the candidate should have a personal desire and be self-motivated to learn everything about how a complexed corporate treasury functions: from Debt Capital Markets to Cash Management to Derivatives and Valuations. The developer will gather requirements from and work closely with Treasury professionals to plan, prototype, and support developed solutions. This position performs a variety of complicated tasks individually and within a team-oriented environment. The smaller development team size enables an individual developer to have a significant impact on the overall direction of our technology offerings. The products developed by the team helps streamline and analyze the daily money movement of billions of dollars. This position may lead, direct or coordinate the work of others when required.', 4, 'Software Engineer - Backend', 'Gabès , Tunisia', 0, 'fulltime', 1, '2024-08-01', NULL, '2024-04-26 16:11:02', '2024-04-26 17:22:01', 2, 3, 'any', 'negotiable'),
(415, '158', '213', 'Physical Education Teacher', 'physical-education-teacher', 'In addition to joining a highly motivated team and engaging in meaningful work, you’ll have access to a comprehensive suite of benefits including a retirement plan, “take what you need” PTO policy, 12 paid holidays, and 3 weeks of organization-wide closures during the year. You and your dependents will have access to multiple health, dental, and vision plans as well as employee life and disability insurance at no cost. Our compensation policy strives to be equitable and transparent. The salary for this position starts at $66,534 and goes up to $96,528 commensurate with experience and qualifications.\r\n\r\nSummit is an equal opportunity employer. We believe that diversity, equity, and inclusion are directly intertwined with education. We are ALL better when we are able to bring our whole selves to work and honor each other’s voices across identities, cultural backgrounds, and life experiences. We welcome and encourage applications from individuals who are members of historically marginalized communities. Spanish language proficiency is a plus.', 'What You’ll Do:\r\nSee sample teacher schedules here. A student school day is around 8-8:30am to 3-3:30pm, depending on the specific school. Teachers day’s shall begin no earlier than 8:00 a.m. and end no later than 5:00 p.m. on any given workday.\r\nPhysical Education and Health Project Time: Teach 90-minute blocks, up to five  per day of project time. Most teachers teach one course for the entire grade (e.g. 9th Grade Biology), and see each section twice per week. Teachers work with students on projects that develop cognitive skills and apply their content knowledge to real-world situations. Teachers facilitate discussions in the classroom, coach students in applying their cognitive skills, and give students feedback. Between teaching blocks, teachers analyze student data, build lesson plans, support school culture, and other personal development activities. Summit teachers build lesson plans through a deep understanding of student progress data, which determines the group and individual supports needed for their students to succeed. Our physical education and health teacher will build projects and lesson plans that meet Washington State P.E. and health requirements.\r\nMentor Time: Build deep relationships and sense of community when teachers meet with their small group of mentees daily for their entire time at Summit. Daily, teachers meet with their mentor groups, work on habits of success as a group, and check in one-on-one with their mentees. Mentors coach and advocate for their mentees both inside and outside of the classroom, and strive to support them as they develop their sense of purpose as they become self-directed learners.\r\nSelf-Directed Learning Time and Interventions: Facilitate Self Directed Learning time and daily literacy or math interventions, which don’t involve lesson planning. During this time, teachers provide student support, monitor progress, and check in with individuals or groups of students.\r\nCollaboration & Professional Development: Twice a week, teachers participate in all-faculty after-school meetings where community decisions are made, professional development takes place, and faculty collaborates as a grade-level team or subject-level team.', 5, 'Physical Education Teacher', 'Mahdiya , Tunisia', 0, 'partime', 1, '2024-05-10', NULL, '2024-04-26 17:09:32', '2024-04-26 17:09:45', 8, 5, 'any', '10000-20000'),
(416, '159', '214', 'Engineer Associate', 'engineer-associate', 'Physical Demands and Working Conditions:\r\n\r\nWhile performing the duties of this job, the employee is regularly required to stand; walk; use hands/fingers to handle, or feel; reach with hands and arms; climb, ascend/descend or balance to heights that may require a ladder or lift; stoop, kneel, crouch, or crawl in confined spaces; and talk or hear. The employee is occasionally required to sit. The employee must occasionally lift and/or move more than 50 pounds. The employee is regularly required to use close vision and color vision. The employee is occasionally exposed to outside weather conditions and risk of electrical shock. Work is\r\n\r\ntypically performed in a factory environment and is usually very loud. In the factory environment, the employee may be exposed to hazardous materials and/or greasy or slippery factory floors.', 'Knowledge, Skills, Abilities, & Behaviors Required:\r\n\r\n· Bachelor’s degree in Engineering with 0 to 3 years of experience.\r\n\r\n· Excellent communication and interpersonal skills.\r\n\r\n· Combination of hands-on technical skills and project management skills\r\n\r\n· Previous experience in a research and development or manufacturing environment preferred\r\n\r\n· Ability to write technical documents.\r\n\r\n· Design knowledge of Pro-E', 6, 'Engineer Associate', 'Sfax , Tunisia', 0, 'fulltime', 1, '2024-05-03', NULL, '2024-04-26 17:17:32', '2024-04-26 17:22:58', 5, 9, 'any', 'negotiable'),
(417, '160', '215', 'Design Senior Manager', 'design-senior-manager', 'What you will be doing\r\n\r\nDesign Process\r\n\r\nOwns and leads a design process, interacting with Architectural, Mechanical, and Electrical Partners (MEPs), and other design partners to deliver a portfolio of world-class data centers with a strong focus on technical excellence, mission-critical resilience, and cost management\r\nReviews and contributes to the development of globally standardized tools, techniques, and processes for the management and reporting of the design process\r\nWorks with peers in other regions to drive consistency and technical excellence in design and delivery practices and methodologies\r\nThinks and acts globally, considering the applicability of any design decision, innovations, or standards changes for all regions', 'The Design Delivery Principal is responsible for design decisions related to a portfolio of data center projects which can include: new construction, phased expansion, retrofits and upgrades, acquisition conversions, mechanical and electrical equipment selections, and standards upgrades in either a specific region or globally. They are an exceptional industry professional progressing toward becoming a recognized expert in data center design. The Design Senior Manager critically assesses design decisions with consultation with more senior staff across disciplines. They required Equinix standards and country-specific regulations to make the best design choices. They manage the relationship and output of key design partners and equipment suppliers for their assigned projects and critically assess and escalate issues where the relationship with such partners is not meeting expectations.', 7, 'Design Senior Manager', 'Monastir , Tunisia', 0, 'remote', 1, '2024-05-02', NULL, '2024-04-26 17:33:42', '2024-04-26 20:35:59', 2, 3, 'male', 'negotiable'),
(418, '161', '216', 'Research Scientist', 'research-scientist', 'In this hybrid role, you\'ll have a defined work location that includes work from home and 2-3 office days set by you and your team with the option of being Flex or Office. For more information on our approach to hybrid work as well as our work type options, please visit the how we work website.\r\n\r\nFlatiron Health is proud to be an Equal Employment Opportunity employer.\r\n\r\nWe do not discriminate based upon race, religion, color, national origin, gender (including pregnancy, childbirth, or related medical conditions), sexual orientation, gender identity, gender expression, age, status as a protected veteran, status as an individual with a disability, or other applicable legally protected characteristics.', 'In this role, you will work as a member of the Research Sciences (RS) department, primarily supporting the Custom Solutions and Services (CSS) team within the Client Solutions organization. This team provides customized real-world data and real-world evidence solutions to address the most important research questions across clinical development, market access, and commercial use cases for our life sciences partners.', 8, 'Research Scientist', 'Sfax , Tunisia', 0, 'fulltime', 1, '2024-05-10', NULL, '2024-04-26 17:42:19', '2024-04-26 17:42:30', 3, 2, 'any', '10000-20000'),
(419, '162', '217', 'Travel Consultant - Travel & Lifestyle Services', 'travel-consultant-travel-lifestyle-services', 'Minimum Qualifications\r\n\r\n1 year experience in tourism, travel, hospitality or cruise and tours\r\nHigh-end customer service or sales roles experience\r\nDemonstrated ability to provide premium customer service, ideally in a call center or other comparable fast paced, high-volume servicing environment\r\nBasic geography knowledge with ability to locate continents, countries, and key travel destinations world-wide\r\nPositive attitude and outlook, as demonstrated through a desire to learn, willingness to try new things, resiliency through change and optimism\r\nNatural communicator who can demonstrate active listening skills and to adapt conversation to suit the situation and the Card Member\'s communication style\r\nComputer proficiency as demonstrated by the ability to navigate multiple computer applications, Microsoft Office and personal devices\r\nAbility to succeed in a result focused environment, with a healthy desire to meet and exceed goals\r\nYou must have the ability to work nights and weekends as we service our Card Members 24 hours a day / 7 days per week', 'How will you make an impact in this role?\r\n\r\nDeliver world-class customer service in an in-bound, high-volume travel call servicing environment\r\nDelighting our Premium Card Members with unforgettable travel experiences by creating new bookings and servicing existing travel arrangements\r\nUnderstand our customer needs through consultation to deliver innovative and extraordinary interactions\r\nResearch, plan, and create personalized travel experiences, through booking domestic and international flights, car and hotel travel arrangements\r\nCommunicate new and existing product offerings and value propositions relevant to the Card Member\r\nAlways put the Card Member\'s experience at the forefront of everything you do, reinforcing the Membership First ™ approach, delivering excellent service and outcomes that are core to the American Express brand', 9, 'Travel Consultant - Travel & Lifestyle Services', 'Sousse , Tunisia', 0, 'fulltime', 1, '2024-05-10', NULL, '2024-04-26 17:56:18', '2024-04-26 19:22:20', 2, 5, 'female', 'negotiable'),
(420, '163', '218', 'Business Manager', 'business-manager', 'Requirements\r\n\r\n2+ years of experience with business management, purchasing, or contract administration\r\nDemonstrate the ability to lead and manage moderate risk business management projects with diverse scope\r\nShow extreme attention to detail with a high level of accuracy\r\nPossess excellent verbal and written communication skills\r\nExhibit the ability to multitask, prioritize, and solve problems with little direct supervision\r\nShowcase strong planning, prioritization, and organizational skills, along with outstanding relationship-building abilities\r\nDemonstrate strong verbal and written communication skills, as well as solid analytical and problem-solving skills\r\nAbility to travel 10-20%of the time for strategic meetings, events and/or tradeshows\r\nBachelor\'s degree in business management, GIS, geoscience/geospatial, or a related field.', 'Responsibilities\r\n\r\nReview business and contract documents, identifying key terms and contributing to inbound licensing development of contract clauses\r\nSummarize and distribute contract summaries, ensuring timely input of contract details into company business systems, tracking milestones and risks, and managing contract closeout activities, as well as facilitating contract renewals and extensions\r\nPrioritize and synthesize business planning, legal and business reviews, project management, financial and metric analysis\r\nCollaborate closely with business managers, product managers, software developers, finance, and contracts teams to administer contract requirements throughout the contract\'s lifecycle, including related budgets and procurement vehicles\r\nProvide timely responses to inquiries from product management, software development, and finance teams regarding pending and existing contracts\r\nIdentify opportunities for process improvement to enhance the efficiency of the contract licensing process\r\nDemonstrate enthusiasm and commitment to a team-based working environment, collaborating and coordinating strategies and project execution with multiple business lines and functional support areas across the company and global offices\r\nOrganize, coordinate, and direct projects within and across departments, business units, and service lines\r\nAdapt to changing business objectives, multitask effectively, and prioritize tasks with agility.', 10, 'Business Manager', 'Nabeul , Tunisia', 0, 'fulltime', 1, '2024-05-10', NULL, '2024-04-26 19:20:23', '2024-04-26 19:22:51', 1, 2, 'any', 'negotiable');

-- --------------------------------------------------------

--
-- Table structure for table `job_user`
--

CREATE TABLE `job_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_user`
--

INSERT INTO `job_user` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(7, 164, 414, '2024-04-26 20:32:10', '2024-04-26 20:32:10'),
(8, 164, 419, '2024-04-26 20:32:28', '2024-04-26 20:32:28'),
(9, 164, 413, '2024-04-27 08:40:38', '2024-04-27 08:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_17_185333_create_profiles_table', 1),
(7, '2023_08_17_185404_create_companies_table', 1),
(8, '2023_08_17_185453_create_categories_table', 1),
(9, '2023_08_17_185703_create_jobs_table', 1),
(10, '2023_08_17_185852_create_job_user_table', 1),
(11, '2023_08_17_185951_create_favorites_table', 1),
(12, '2023_08_24_110136_add_column_to_jobs', 1),
(13, '2023_08_26_091819_create_roles_table', 1),
(14, '2023_08_26_091900_create_role_user_table', 1),
(15, '2023_08_28_133322_create_posts_table', 1),
(16, '2023_08_30_134159_create_testimonials_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_thumbnail` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `category_id`, `post_thumbnail`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Modi laborum ut perspiciatis ut dignissimos.', 'modi-laborum-ut-perspiciatis-ut-dignissimos', 1, 'uploads/posts.jpg', 'Quis perferendis rerum repellat nostrum fugiat id. Ea id sit unde et quis doloremque. Voluptatem earum autem vel exercitationem. Deleniti odio tenetur quis eos in. Voluptas nihil quam ab molestiae. Blanditiis magni voluptates dolores porro sint eligendi. Et maiores placeat harum et cupiditate non accusantium. Doloribus deserunt consequatur qui suscipit dolore.', '0', NULL, '2023-12-02 12:01:15', '2023-12-02 12:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bio` text NOT NULL,
  `cover_letter` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `address`, `gender`, `dob`, `experience`, `phone`, `bio`, `cover_letter`, `resume`, `avatar`, `created_at`, `updated_at`) VALUES
(7, 164, 'Sfax , Tunisia', 'female', '2000-03-29', 'In my role as an AI engineer, I\'ve had the opportunity to work on diverse projects that leverage machine learning and deep learning techniques to solve complex problems. One of my key accomplishments was leading the development of a natural language processing (NLP) model that significantly improved chatbot response accuracy for a customer service application.  I collaborated closely with data scientists and software engineers to gather and preprocess large datasets, ensuring they were suitable for training. Using TensorFlow, I developed and fine-tuned an attention-based sequence-to-sequence model that incorporated state-of-the-art NLP techniques. This involved optimizing hyperparameters and conducting extensive performance evaluations to achieve a balance between accuracy and computational efficiency.  Beyond model development, I spearheaded the integration of the NLP model into our existing chatbot infrastructure, working alongside DevOps teams to ensure seamless deployment and scalability. Post-deployment, I implemented monitoring solutions to track model performance and detect anomalies, enabling timely updates and enhancements based on real-world usage data.', '55412745', 'I am a dedicated AI engineer with a passion for leveraging cutting-edge technologies to solve complex problems. With a background in computer science and a specialization in machine learning, I thrive on building intelligent systems that drive innovation and enhance user experiences.', 'public/files/5fXospLUmI0TLvgf5DPiPEAoWfBSudd6tIRFJRq9.pdf', 'public/files/LW9UbG6zTyGZcgC6CLDNjmyCc45Jt5k1Ty4ifGBj.pdf', '1714163998.jpg', '2024-04-26 19:24:59', '2024-04-26 20:31:13'),
(8, 165, '', 'female', '2000-12-10', '', '', '', '', '', '', '2024-04-27 08:45:04', '2024-04-27 08:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-04-26 11:34:45', '2024-04-26 11:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 51, 1, NULL, NULL),
(2, 153, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `video_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profession`, `content`, `video_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mylene Johns', 'Veterinary Assistant OR Laboratory Animal Caretaker', 'Rerum reprehenderit optio sapiente deleniti eos ea. Qui consequatur et veniam eum. Sint et placeat aut nisi. Cum sunt fugiat qui laudantium aut et. Neque dolores assumenda rerum voluptas eum cum soluta. Voluptatem id ea quae libero sunt velit. A aliquam u', 28959265, 1, '2023-12-02 12:01:18', '2023-12-02 12:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(153, 'admin', 'admin', 'jobfinderadministrator@gmail.com', '2024-04-26 11:34:46', '$2y$10$KlZ5poUx9KDnGS2T9mZmOep0gkcOei2X.C/zEKmsoRxGgHcK6KkIq', '1', NULL, '2024-04-26 11:34:46', '2024-04-26 11:34:46'),
(154, '', 'employer', 'cienahealthcare@contact.com', '2024-04-26 13:58:40', '$2y$10$9kKCvHnZUZCbhv0b8Cy1Uew1KTutWuyj40am2Rnp8R4m2O8J95S86', '1', NULL, '2024-04-26 13:55:47', '2024-04-26 13:58:40'),
(155, '', 'employer', 'healthfirst@contact.com', '2024-04-26 15:23:53', '$2y$10$eiG9acOAcGxd1Vu3QNhlmu4p7OP84Su1/1KWUEIY8RnuJoVTcRiI6', '1', NULL, '2024-04-26 15:23:12', '2024-04-26 15:23:53'),
(156, '', 'employer', 'penskemotorgroup@contact.com', '2024-04-26 15:45:57', '$2y$10$lzm1xXRBKAlF/zOlm4/JJ.TQehF5Ge7foahOKT7GyME9URgsUvWw2', '1', NULL, '2024-04-26 15:45:19', '2024-04-26 15:45:57'),
(157, '', 'employer', 'toyota@contact.com', '2024-04-26 15:58:58', '$2y$10$YQMQC9b7NOCoAvArGlyt6ertFysazvYrsrMHSIudtWM8o2MUwiPeC', '1', NULL, '2024-04-26 15:58:26', '2024-04-26 15:58:58'),
(158, '', 'employer', 'school@contact.com', '2024-04-26 17:00:42', '$2y$10$8N3vfd6i9jscf.yXuIrkVOqbu08VaCh06wnMcx7cFhgJBFz74HFcq', '1', NULL, '2024-04-26 17:00:07', '2024-04-26 17:00:42'),
(159, '', 'employer', 'ats@contact.com', '2024-04-26 17:13:08', '$2y$10$79dppYYhO.dnm6B8skA1rudWhZzVlkHkNGjHTm7RdTiSDolDzR40S', '1', NULL, '2024-04-26 17:12:32', '2024-04-26 17:13:08'),
(160, '', 'employer', 'equinix@contact.com', '2024-04-26 17:30:53', '$2y$10$xvatp43rr6tc7H84CE4dB.nzGfO/qQnY01vUz2UDHCnLVUqmma.HG', '1', NULL, '2024-04-26 17:28:41', '2024-04-26 17:30:53'),
(161, '', 'employer', 'flatiron@contact.com', '2024-04-26 17:36:30', '$2y$10$xG4w44nqsw7ATd665se3tOs3NlaMtLWmXi.I6tiyO2dyjFQdGIDnq', '1', NULL, '2024-04-26 17:35:40', '2024-04-26 17:36:30'),
(162, '', 'employer', 'americanexpress@contact.com', '2024-04-26 17:48:38', '$2y$10$KbfHevIkGtV4K9AHWF8exOUrmQ82k2yrmsSY064GCfPLJ5pfjMXay', '1', NULL, '2024-04-26 17:47:50', '2024-04-26 17:48:38'),
(163, '', 'employer', 'esri@contact.com', '2024-04-26 19:13:02', '$2y$10$m1vXmsAzu1aNRjRbXtqEnurhwV7pP5wa2RW7hUI36uEpYllOa2E7W', '1', NULL, '2024-04-26 19:12:32', '2024-04-26 19:13:02'),
(164, 'Sirine', 'seeker', 'sirine@contact.com', '2024-04-26 19:25:14', '$2y$10$SFJNKbCAZce2XRkmFtr2ZOxDcBm.JZMDt70/tGJBWEfJi3vuAepoe', '1', NULL, '2024-04-26 19:24:59', '2024-04-26 20:36:44'),
(165, 'mariem', 'seeker', 'mariem@contact.com', '2024-04-27 08:45:54', '$2y$10$WIDpSG5ddg0NI.4Yi2KBLujA.CBfVYurqKPncioeUDn8YWNt.Ouji', '1', NULL, '2024-04-27 08:45:04', '2024-04-27 08:45:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT for table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_user`
--
ALTER TABLE `job_user`
  ADD CONSTRAINT `job_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
