-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2021 at 01:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `stock`, `image`, `description`, `category_id`) VALUES
(31, 'Astrophysics for Young People in a Hurry', 5, 'Aypih.jpg', 'From the basics of physics to big questions about the nature of space and time, celebrated astrophysicist and science communicator Neil deGrasse Tyson breaks down the mysteries of the cosmos into bite-sized pieces. Astrophysics for Young People in a Hurry describes the fundamental rules and unknowns of our universe clearly―and with Tyson’s characteristic wit, there’s a lot of fun thrown in, too.\r\n\r\nThis adaptation by Gregory Mone includes full-color photos, infographics, and extra explanations to make even the trickiest concepts accessible. Building on the wonder inspired by outer space, Astrophysics for Young People in a Hurry introduces an exciting field and the principles of scientific inquiry to young readers.', 1),
(32, 'Astrophysics for People in a Hurry', 9, 'Apih.jpg', 'What is the nature of space and time? How do we fit within the universe? How does the universe fit within us? There’s no better guide through these mind-expanding questions than acclaimed astrophysicist and best-selling author Neil deGrasse Tyson.\r\n\r\nBut today, few of us have time to contemplate the cosmos. So Tyson brings the universe down to Earth succinctly and clearly, with sparkling wit, in tasty chapters consumable anytime and anywhere in your busy day.\r\n\r\nWhile you wait for your morning coffee to brew, for the bus, the train, or a plane to arrive, Astrophysics for People in a Hurry will reveal just what you need to be fluent and ready for the next cosmic headlines: from the Big Bang to black holes, from quarks to quantum mechanics, and from the search for planets to the search for life in the universe.', 1),
(34, 'Cosmos: Possible Worlds', 20, 'Cpw.jpg', 'Based on National Geographic\'s internationally-renowned television series, this groundbreaking and visually stunning book explores how science and civilization grew up together. From the emergence of life at deep-sea vents to solar-powered starships sailing through the galaxy, from the Big Bang to the intricacies of intelligence in many life forms, acclaimed author Ann Druyan documents where humanity has been and where it is going, using her unique gift of bringing complex scientific concepts to life. With evocative photographs and vivid illustrations, she recounts momentous discoveries, from the Voyager missions in which she and her husband, Carl Sagan, participated to Cassini-Huygens\'s recent insights into Saturn\'s moons. This breathtaking sequel to Sagan\'s masterpiece explains how we humans can glean a new understanding of consciousness here on Earth and out in the cosmos--again reminding us that our planet is a pale blue dot in an immense universe of possibility.', 1),
(35, 'Cracking the Coding Interview: 189 Programming Questions and Solutions 6th Edition', 3, 'Cci189.jpg', 'I am not a recruiter. I am a software engineer. And as such, I know what it\'s like to be asked to whip up brilliant algorithms on the spot and then write flawless code on a whiteboard. I\'ve been through this as a candidate and as an interviewer.\r\n\r\nCracking the Coding Interview, 6th Edition is here to help you through this process, teaching you what you need to know and enabling you to perform at your very best. I\'ve coached and interviewed hundreds of software engineers. The result is this book.\r\n\r\nLearn how to uncover the hints and hidden details in a question, discover how to break down a problem into manageable chunks, develop techniques to unstick yourself when stuck, learn (or re-learn) core computer science concepts, and practice on 189 interview questions and solutions.\r\n\r\nThese interview questions are real; they are not pulled out of computer science textbooks. They reflect what\'s truly being asked at the top companies, so that you can be as prepared as possible. WHAT\'S INSIDE?\r\n\r\n189 programming interview questions, ranging from the basics to the trickiest algorithm problems.\r\nA walk-through of how to derive each solution, so that you can learn how to get there yourself.\r\nHints on how to solve each of the 189 questions, just like what you would get in a real interview.\r\nFive proven strategies to tackle algorithm questions, so that you can solve questions you haven\'t seen.\r\nExtensive coverage of essential topics, such as big O time, data structures, and core algorithms.\r\nA behind the scenes look at how top companies like Google and Facebook hire developers.\r\nTechniques to prepare for and ace the soft side of the interview: behavioral questions.\r\nFor interviewers and companies: details on what makes a good interview question and hiring process.', 2),
(36, 'Data Science from Scratch: First Principles with Python 2nd Edition', 23, 'Dssfpp.jpg', 'To really learn data science, you should not only master the tools—data science libraries, frameworks, modules, and toolkits—but also understand the ideas and principles underlying them. Updated for Python 3.6, this second edition of Data Science from Scratch shows you how these tools and algorithms work by implementing them from scratch.\r\n\r\nIf you have an aptitude for mathematics and some programming skills, author Joel Grus will help you get comfortable with the math and statistics at the core of data science, and with the hacking skills you need to get started as a data scientist. Packed with New material on deep learning, statistics, and natural language processing, this updated book shows you how to find the gems in today’s messy glut of data.\r\n\r\nGet a crash course in Python\r\nLearn the basics of linear algebra, statistics, and probability—and how and when they’re used in data science\r\nCollect, explore, clean, munge, and manipulate data\r\nDive into the fundamentals of machine learning\r\nImplement models such as k-nearest neighbors, Naïve Bayes, linear and logistic regression, decision trees, neural networks, and clustering\r\nExplore recommender systems, natural language processing, network analysis, MapReduce, and databases.', 2),
(37, 'Crafting Interpreters', 5, 'Ci.jpg', 'Despite using them every day, most software engineers know little about how programming languages are designed and implemented. For many, their only experience with that corner of computer science was a terrifying \"compilers\" class that they suffered through in undergrad and tried to blot from their memory as soon as they had scribbled their last NFA to DFA conversion on the final exam.\r\n\r\nThat fearsome reputation belies a field that is rich with useful techniques and not so difficult as some of its practitioners might have you believe. A better understanding of how programming languages are built will make you a stronger software engineer and teach you concepts and data structures you\'ll use the rest of your coding days. You might even have fun.\r\n\r\nThis book teaches you everything you need to know to implement a full-featured, efficient scripting language. You’ll learn both high-level concepts around parsing and semantics and gritty details like bytecode representation and garbage collection. Your brain will light up with new ideas, and your hands will get dirty and calloused.\r\n\r\nStarting from main(), you will build a language that features rich syntax, dynamic typing, garbage collection, lexical scope, first-class functions, closures, classes, and inheritance. All packed into a few thousand lines of clean, fast code that you thoroughly understand because you wrote each one yourself.', 2),
(38, 'A Thousand Brains: A New Theory of Intelligence', 7, 'Atb.jpg', 'For all of neuroscience\'s advances, we\'ve made little progress on its biggest question: How do simple cells in the brain create intelligence? Jeff Hawkins and his team discovered that the brain uses map-like structures to build a model of the world - not just one model, but hundreds of thousands of models of everything we know. This discovery allows Hawkins to answer important questions about how we perceive the world, why we have a sense of self, and the origin of high-level thought. A Thousand Brains heralds a revolution in the understanding of intelligence. It is a big-think book, in every sense of the word.', 2),
(39, 'A Promised Land', 25, 'Apl.jpg', 'In the stirring, highly anticipated first volume of his presidential memoirs, Barack Obama tells the story of his improbable odyssey from young man searching for his identity to leader of the free world, describing in strikingly personal detail both his political education and the landmark moments of the first term of his historic presidency—a time of dramatic transformation and turmoil.\r\n\r\nObama takes readers on a compelling journey from his earliest political aspirations to the pivotal Iowa caucus victory that demonstrated the power of grassroots activism to the watershed night of November 4, 2008, when he was elected 44th president of the United States, becoming the first African American to hold the nation’s highest office.\r\n\r\nReflecting on the presidency, he offers a unique and thoughtful exploration of both the awesome reach and the limits of presidential power, as well as singular insights into the dynamics of U.S. partisan politics and international diplomacy. Obama brings readers inside the Oval Office and the White House Situation Room, and to Moscow, Cairo, Beijing, and points beyond. We are privy to his thoughts as he assembles his cabinet, wrestles with a global financial crisis, takes the measure of Vladimir Putin, overcomes seemingly insurmountable odds to secure passage of the Affordable Care Act, clashes with generals about U.S. strategy in Afghanistan, tackles Wall Street reform, responds to the devastating Deepwater Horizon blowout, and authorizes Operation Neptune’s Spear, which leads to the death of Osama bin Laden.\r\n\r\nA Promised Land is extraordinarily intimate and introspective—the story of one man’s bet with history, the faith of a community organizer tested on the world stage. Obama is candid about the balancing act of running for office as a Black American, bearing the expectations of a generation buoyed by messages of “hope and change,” and meeting the moral challenges of high-stakes decision-making. He is frank about the forces that opposed him at home and abroad, open about how living in the White House affected his wife and daughters, and unafraid to reveal self-doubt and disappointment. Yet he never wavers from his belief that inside the great, ongoing American experiment, progress is always possible.\r\n\r\nThis beautifully written and powerful book captures Barack Obama’s conviction that democracy is not a gift from on high but something founded on empathy and common understanding and built together, day by day.', 3),
(40, 'If You Tell: A True Story of Murder, Family Secrets, and the Unbreakable Bond of Sisterhood', 21, 'Iyt.jpg', 'After more than a decade, when sisters Nikki, Sami, and Tori Knotek hear the word mom, it claws like an eagle’s talons, triggering memories that have been their secret since childhood. Until now.\n\nFor years, behind the closed doors of their farmhouse in Raymond, Washington, their sadistic mother, Shelly, subjected her girls to unimaginable abuse, degradation, torture, and psychic terrors. Through it all, Nikki, Sami, and Tori developed a defiant bond that made them far less vulnerable than Shelly imagined. Even as others were drawn into their mother’s dark and perverse web, the sisters found the strength and courage to escape an escalating nightmare that culminated in multiple murders.\n\nHarrowing and heartrending, If You Tell is a survivor’s story of absolute evil―and the freedom and justice that Nikki, Sami, and Tori risked their lives to fight for. Sisters forever, victims no more, they found a light in the darkness that made them the resilient women they are today―loving, loved, and moving on.', 3),
(46, 'Test2', 2, 'Angkot.png', 'Test2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Astronomy and Astrophysics'),
(2, 'Computers and Technology'),
(3, 'Biographies and Memoirs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
