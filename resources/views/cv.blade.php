<x-layout>
    <div>
        <header class="bg-info text-white text-center py-5">
            <h1 class="display-4">Shatha Bitar</h1>
            <p class="lead">Computer Science Student & Developer</p>
        </header>


        <section class="container my-5" id="about" href="/#about">
            <h2>About Me</h2>
            <p>A final-year student in Computer Science in HTU with a strong interest in Back-End and Full-Stack
                Development.
                Skilled at C#, .NET, SQL, and building scalable server-side applications. Proficient in problem-solving,
                teamwork,
                and applying software engineering principles.</p>
        </section>

        <section class="bg-light py-5" id="experience" href="/#experience">
            <div class="container">
                <h2>Experience</h2>
                <p><strong>iOS Mobile Application Developer (Part-time)</strong> - RommanApps
                    </p>
                <ul class="list-group list-group-flush">   
                    <li class="list-group-item">
                        Learned swiftUI and objective C. <br>
                        Created user interface for 2 applications.<br>
                        Updated and added new features onto existing applications.<br>
                        Developed an application with AR technology to add facial filters.<br>
                    </li>
                </ul>
            </div>
        </section>

        <section class="container my-5" id="education" href="/#education">
            <h2>Education</h2>
            <ul>
                <li class="fw-bold">Bachelor of Computer Science - HTU (2022-2026)</li>
                <li>GPA: 4.0</li>
                <li>- Awarded a full scholarship for high school academic excellence.</li>
                <li>- Received First Rank Award for academic excellence (Top of Computer Science
                    department 2022).</li>
            </ul>
        </section>

        <section class="bg-light py-5" id="skills" href="/#skills">
            <div class="container">
                <h2>Skills</h2>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-primary hover:bg-sky-900">C#</span>
                    <span class="badge bg-secondary">.NET Core</span>
                    <span class="badge bg-success">SQL</span>
                    <span class="badge bg-warning text-dark">Laravel</span>
                    <span class="badge bg-info text-dark">JavaScript</span>
                    <span class="badge bg-dark">HTML/CSS</span>
                </div>
            </div>
        </section>

        <section class="container my-5" id="contact" href="/#contact">
            <h2>Contact Me</h2>
            <p>If you want to reach out, please fill out the form below:</p>

            <x-contactform :tags="$tags" />
        </section>

        <footer class="bg-dark text-white text-center py-4">
            &copy; {{ date('Y') }} Shatha Bitar. All Rights Reserved.
        </footer>
    </div>
</x-layout>