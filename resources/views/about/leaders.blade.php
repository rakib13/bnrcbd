@extends('layouts.main-body')

@section('main-body-content')

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                            class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->

<!-- Header Start -->
<div class="container-fluid position-relative p-0">
    <!-- Background Image -->
    <img src="{{ asset('/img/about image3.jpg') }}" alt="BNRC Background" class="w-100" style="height: auto;">

    <!-- Overlay with background color and animation -->
    <div class="position-absolute top-50 start-50 translate-middle text-center px-4 py-3 animated-banner">
         {{-- <h1 class="bnrc-title animate-slide-up">BNRC - Bangladesh Nationalist Research Centre</h1> --}}
        {{-- <h1 class="bnrc-title animate-slide-up"> Research and Analysis for Bangladesh </h1> --}}
        {{-- <p class="bnrc-tagline animate-fade-in delay-1">Empowering Leadership Through Research and Innovation.</p> --}}
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid bg-light about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-start">
            <!-- Combined Sidebar and Content Container -->
            <div class="col-12 d-flex p-0 position-relative"> <!-- Changed to flex container -->

                <!-- Content Area (now positioned immediately to the right) -->
                <div class="content-area wow fadeInRight" data-wow-delay="0.2s" style="flex: 1; margin-left: 20px;">
                   
                   
                    <div id="leaders" class="about-item-content bg-white rounded p-5 h-100 section active">
                        <h4 class="text-primary text-center">Shaheed President Ziaur Rahman</h4>
                        <div style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('img/ziaurrahman.jpg') }}" alt="Ziaur Rahman"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                            <p style="margin-top: 10px; font-style: italic; color: #555; text-align:center;">
                                Shaheed
                                President Ziaur Rahman</p>
                        </div>
                        <p> Lieutenant General Ziaur Rahman Bir Uttam (1936-1981) was the founder of Bangladesh
                            Nationalist Party. He was the declarer of independence and a valiant freedom
                            fighter. He
                            was also Chief of Army Staff and later became the elected President of Bangladesh.
                            He
                            opened up multi-party democracy in Bangladesh and defined Bangladeshi Nationalism.
                        </p>
                        <section>
                            <h2>Early Life</h2>
                            <p>
                                Ziaur Rahman, fondly called Zia, was born on l9 January 1936 at Bagbari in
                                Bogra.
                                His father Mansur Rahman was a chemist, who used to work in a government
                                department
                                in Calcutta. He spent his childhood partly in the rural area of Bogura and
                                partly in
                                Calcutta. After the partition of India (1947), when his father was transferred
                                to
                                Karachi, Zia had to leave the Hare School in Calcutta and become a student of
                                the
                                Academy School in Karachi. He completed his secondary education from that School
                                in
                                1952. In 1953, he got himself admitted into the D.J. College in Karachi. In the
                                same
                                year, he joined the Pakistan Military Academy at Kakul as an officer cadet.
                            </p>
                        </section>
                        <section>
                            <h2>Life in Army</h2>
                            <p>
                                Ziaur Rahman was commissioned in 1955 as a second lieutenant. He served in
                                Pakistan
                                for two years. Then in 1957, he was transferred to the East Bengal Regiment. He
                                also
                                worked in the military intelligence department from 1959 to 1964. In the
                                Indo-Pakistan War of 1965, Ziaur Rahman fought in the Khemkaran sector as the
                                commander of a company. Surprisingly, his company received the maximum number of
                                gallantry awards for heroic performances in the war. He was appointed an
                                instructor
                                at the Pakistan Military Academy in 1966. In the same year, he was sent to the
                                Staff
                                College in Quetta for attending a 'command' course. In 1969, he joined the
                                Second
                                East Bengal Regiment as its second-in-command at Joydevpur, Bangladesh. He
                                received
                                higher training from West Germany. On his return home in 1970, Ziaur Rahman,
                                then a
                                major, was transferred to the Eighth East Bengal Regiment at Chittagong as its
                                second in command.
                            </p>
                        </section>
                        <section>
                            <h2>Heroism at the Liberation War</h2>
                            <p>
                                At midnight on 25th March 1971, Pakistani military forces started
                                indiscriminately
                                open fire on the unarmed people of the then East Pakistan and carried out the
                                worst
                                genocide in history. The most brutal genocide in the history of the world is
                                known
                                as 'Operation Searchlight'.
                                Major Ziaur Rahman rebelled against Pakistan on March 25, 1971. Then on March
                                26, he
                                proclaimed the declaration of independence from the radio station of Kalurghat
                                in
                                Chittagong with the help of the workers of the Betar Kendra. He said, I Major
                                Zia,
                                Provisional Commander-in-Chief of the Bangladesh Liberation Army, do hereby
                                declare
                                the independence of Bangladesh. Considering the mental situations of liberation
                                mongering Bangladeshi population, the declaration had an incredible impact.
                                Ziaur Rahman and his troops thus came to the forefront of the War of Liberation.
                                Major Zia and the armed forces under his command kept the Chittagong and
                                Noakhali
                                areas under their control for a few days and then, being put under pressure by
                                the
                                Pakistan army, crossed the border as a strategic retreat.
                                Ziaur Rahman became the Bangladesh Forces Commander of BDF Sector 1 initially,
                                and
                                from June as BDF commander of BDF Sector 11 of the Bangladesh Forces and the
                                Brigade
                                Commander of Z Force from mid-July during the country's Independence war from
                                Pakistan in 1971. During the liberation war, on August 28, 1971, Ziaur Rahman
                                established the first civil administration in Roumari, a free area recaptured
                                from
                                the Pakistani invasion forces within the geographical boundary of Bangladesh.
                                For
                                his heroic contribution to the liberation war, Ziaur Rahman was decorated with
                                the
                                second highest gallantry award of Bangladesh ‘Bir Uttam’.
                            </p>
                        </section>
                        <section>
                            <h2>Inevitable Rise in Bangladesh Politics</h2>
                            <p>
                                After the most creditable performances during the nine-month war, Zia was
                                appointed
                                brigade commander in Comilla. In June 1972, he was made deputy chief of staff of
                                the
                                armed forces of Bangladesh. In the middle of 1973, he became a Brigadier, and a
                                major general by the end of the year. Ziaur Rahman became the chief of army
                                staff on
                                25 August 1975. When Khaled Mosharraf with the support of the Dhaka Brigade
                                under
                                the command of Shafat Jamil staged a coup d'etat on 3 November 1975, Ziaur
                                Rahman
                                was forced to resign his command and was put under house arrest. The
                                Sepoy-Janata
                                Biplob of 7 November, however, took him to the centre of political power.
                                On 7 November 1975, Ziaur Rahman was reassigned as the army chief. Later, in a
                                meeting at the army headquarters on the same day, a new administrative set-up
                                for
                                the running of an interim government was arranged with Justice ASM Sayem as the
                                Chief Martial Law Administrator and the three service chiefs, Major General Zia,
                                Air
                                Vice Marshal MG Tawab and Rear Admiral MH Khan, as Deputy Chief Martial Law
                                Administrators. Ziaur Rahman became Chief Martial Law Administrator on 19
                                November
                                1976 when Justice Sayem relinquished his position, and ultimately the President
                                of
                                Bangladesh on 21 April 1977 when President Sayem resigned.
                                The law and order situation in the country deteriorated drastically during the
                                post-independence government's tenure. Upon assuming power, Zia immediately
                                moved to
                                restore law and order to the country and to strengthen the police force,
                                practically
                                doubling its size from 40,000 to 70,000 and organizing its proper training. He
                                also
                                restored order in the armed forces. For the purpose, he took certain steps for
                                the
                                development of professionalism in them through rigorous training and restoring
                                discipline. He expanded their strength substantially from less than 50,000 in
                                1974-75 to about 90,000 in 1976-77. Although Zia was successful in restoring
                                discipline within the armed forces, he faced a difficult time because of the
                                existence and operation of heterogeneous interests who staged a number of
                                mutinies
                                and attempted coups forcing him to adopt certain uncompromising and stern
                                actions
                                against those who ignored disciple and took part in those uprisings.

                            </p>
                        </section>
                        <section>
                            <h2>Visionary Statesman</h2>
                            <p>
                                After assuming office as head of the state Ziaur Rahman issued a presidential
                                order
                                amending the Constitution to insert Bismillahir Rahmanir Rahim (In the name of
                                Allah, the Beneficent, the Merciful) in the Preamble of the Constitution. In
                                Article
                                8(1) and 8(1A) the principle of 'absolute trust and faith in the Almighty Allah'
                                has
                                been added. In Article 8(1), socialism has been defined as 'economic and social
                                justice'. In Article 25(2) it has also been provided that 'the state shall
                                endeavour
                                to consolidate, preserve and strengthen fraternal relations among Muslim
                                countries
                                based on Islamic solidarity.'
                                On 1 September 1978, Ziaur Rahman floated a new political party, Bangladesh
                                Nationalist Party-BNP, with himself as its chairman. The second parliamentary
                                elections of the country were held in February 1979 and BNP won 207 seats out of
                                300. On 1 April 1979, the first session of the Jatiya Sangsad was convened. On 9
                                April, martial law was lifted after the enactment of the Fifth Amendment. It was
                                indeed a great achievement and a mark of leadership for Ziaur Rahman to be able
                                to
                                take the country back to normalcy by introducing electoral politics again.
                                Ziaur Rahman introduced ‘Bangladeshi Nationalism’ as a new national identity of
                                the
                                Bangladeshi people. He believed that in a plural society like Bangladesh where
                                people are of diverse ethnicity and where they profess different faiths, have
                                different cultural traits and various lifestyles, nationalism should better be
                                conceptualized in terms of territory rather than language or culture. This is
                                what
                                he emphasized upon. Bangladeshi nationalism put emphasis on national unity and
                                integration of all citizens of Bangladesh irrespective of religion, caste,
                                creed,
                                gender, culture, and ethnicity.
                                In the midst of a disorderly army Zia stood firm and resolute. He came to
                                believe
                                that sooner the country moved to a democratic system the better for himself and
                                for
                                the country. He moved as fast as he could to democratize the polity by restoring
                                the
                                institution of election and thus facilitating the transfer of power to elected
                                representatives peacefully. As a first step towards his goal, Zia allowed the
                                disbanded and disarrayed political parties to be revived and peaceful political
                                activities pursued once again. As a result, Bangladesh Awami League gets a
                                chance to
                                do politics again.
                                Having this goal in view, Zia withdrew the ban on the newspapers and inaugurated
                                the
                                free flow of news by making the information media free and uninterferred. The
                                prevailing situation persuaded him to take part in active politics. He came to
                                believe that by restoring normal political activities and allowing the parties
                                freely, he hoped for establishing a democratic environment in the country.
                            </p>
                        </section>
                        <section>
                            <h2>Economic Reformation</h2>
                            <p>
                                As the president, Ziaur Rahman made significant contributions in another sector.
                                It
                                is the national economy. Zia's economic policy laid emphasis on private sector
                                development, which remained neglected before. He engaged a team of experts to
                                design
                                ways and means for achieving economic development by promoting private sector
                                development, and by initiating agricultural development through injecting
                                subsidies
                                to farmers and agricultural marketing. He took various measures for handing over
                                nationalized industries to their former owners, where possible. To develop the
                                export sector, he took several measures including the promotion of the export of
                                conventional and non-conventional goods. Zia's economic policy earned him
                                considerable success. Food production reached a new height and Bangladesh was
                                dreaming of becoming a rice-surplus country in the near future.
                                Ziaur Rahman's action plan included a 19-Point Programme which put emphasis on
                                making rapid socio-economic transformation in the country. The thrust of the
                                programme was to bring socio-economic transformation and achieve self-reliance
                                and
                                rural uplift through people's participation in the development efforts. Its
                                primary
                                objectives were to accelerate agricultural growth, population control,
                                self-sufficiency in food, decentralization of administration and greater
                                incentives
                                to the private sector. It was also designed to meet the basic needs of the
                                people
                                and special needs of women, youths and workers, and it aimed at establishing a
                                political order based on social justice.
                                To achieve his economic goals, President Zia tried to transform the politics of
                                the
                                country into a development-oriented one, though theoretically such a dream was
                                undoubtedly very weak. Social development area includes not only production. It
                                has
                                many other ramifications. However, he chalked out programmes terming them as
                                revolutions and motivated his party men to realize those programmes through
                                their
                                active participation in the development drive. The first of those was canal
                                digging,
                                and it was designed to supply adequate water to the farmers, especially during
                                the
                                lean season. The second was to remove illiteracy from the society so that an air
                                of
                                enlightenment might emerge through both formal and non-formal education in all
                                strata of the society. Moreover, motivational programmes were set on motion for
                                the
                                acceleration of productions both in the field and factories. Intensifying the
                                Family
                                Planning programme, revolutionary as it was, was designed to stabilize
                                population at
                                a level which might be termed as optimum from the economic and sustainability
                                point
                                of view. The institution of Gram Sarkar (village government) aimed at enlisting
                                the
                                support of the people for a self-reliant Bangladesh, which became a political
                                clichE9 for Zia. One important aspect of his programme was that he did not make
                                it a
                                vote-catching slogan only. He tried to implement his programme in earnest. The
                                excavation and re-excavation of more than 1500 canals in a year and a half,
                                record
                                production of food grains in two successive years (1976-77 and 1977-78), an
                                average
                                annual GDP growth of 6.4% during 1976-78, a vigorous mass education campaign,
                                introduction of Gram Sarkar and Village Defence Party (VDP) made deep impression
                                in
                                the minds of the people. The donor agencies also expressed satisfaction at the
                                development projects of his government.
                            </p>
                        </section>
                        <section>
                            <h2>An International Icon</h2>
                            <p>
                                Having the objectives of establishing good neighbourly relations with India and
                                other South Asian countries on equal footing Zia started bringing in changes
                                first
                                at the internal setting through resurgence of nationalistic aspirations of the
                                people and then by stabilizing countervailing forces at the regional and
                                international levels.
                                The foreign policy goals were thus devised anew, and friendly international
                                relations were set on with a view to achieving peace and progress on the basis
                                of
                                mutual understanding and trust. At the regional level, Bangladesh developed a
                                pattern of mutuality with such states as Pakistan, Nepal, Bhutan, Srilanka, and
                                Maldives along with India so much so that it ultimately led to the forging of
                                regional cooperation in the region, a move which received acclaim from all
                                quarters
                                locally and internationally.
                                At the international level, Bangladesh under his leadership tried to establish
                                friendly and cooperative relations with states of all political varieties,
                                right,
                                centre and left. Bangladesh came closer to the Muslim world which began to take
                                a
                                fresh look at Bangladesh and its problems. Bangladesh developed a good working
                                relation with China and America. Southeast Asian countries were drawn closer to
                                Bangladesh. He attended many international conferences and visited many
                                countries to
                                promote the cause of the nation's multilateral and bilateral relations. The
                                dividend
                                of his drive was rich. Bangladesh was elected to the Security Council in one of
                                its
                                non-permanent seats in 1978 and became actively involved in the activities of
                                the UN
                                members. It was President Zia who conceived of the idea of and initiated actions
                                for
                                regional cooperation in South Asia. For this purpose, he visited these countries
                                during 1979-80 to speak of the need to develop a framework for mutual
                                cooperation.
                                South Asian Association for Regional Cooperation (SAARC) was the outcome of his
                                efforts, which was formally launched in Dhaka in 1985.
                                Zia did not survive to see all his dreams come true. He was assassinated in
                                Chittagong on 30 May 1981 in an abortive army coup. He lies buried at
                                Sher-e-Banglanagar, Dhaka.

                            </p>
                        </section>

                        <!-- Khaleda Zia...................... -->
                        <!-- <div id="Chairperson" class="about-item-content bg-white rounded p-5 h-100 section"> -->
                        <h4 class="text-primary text-center">Chairperson Begum Khaleda Zia</h4>
                        <div style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('img/khaledazia.jpg') }}" alt="Begum Khaleda Zia"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                            <p style="margin-top: 10px; font-style: italic; color: #555; text-align:center;">
                                Khaleda
                                Zia</p>
                        </div>
                        <p> Begum Khaleda Zia, born on 15 August 1946, is the chairperson of the Bangladesh
                            Nationalist Party (BNP) who served as the Prime Minister of Bangladesh three times
                            since
                            1991. She is the first woman to be elected as the Prime Minister of Bangladesh, and
                            second in the Muslim world. </p>
                        <section>

                            <p>
                                Begum Zia was born to Iskandar Majumder and Taiyaba Majumder in Dinajpur
                                District on
                                15 August 1946. Her father had migrated to what was then West Pakistan following
                                Partition from Jalpaiguri in India where he had run a tea business. The family
                                originally hails from Feni, a southeastern district of the country. She studied
                                at
                                Dinajpur Government Girls High School and later at Surendranath College. In
                                1960,
                                she married Ziaur Rahman. </p>
                        </section>
                        <section>

                            <p>
                                When Ziaur Rahman Bir Uttam became the President of Bangladesh, Begum Zia
                                accompanied him as the First Lady and met world leaders including Prime Minister
                                Margaret Thatcher of the UK and Queen Juliana of the Netherlands. </p>
                        </section>
                        <section>

                            <p>
                                Following the martyrdom of President Zia in the abortive coup of 1981, she
                                joined
                                BNP as a general member of the party on 2 January 1982. She was elected as the
                                vice-chairman of the party in March 1983, and in August 1984, the party elected
                                her
                                the chairperson. </p>
                        </section>
                        <section>

                            <p>
                                After a military coup in 1982, led by the Chief of the Bangladesh Army, General
                                Hussain Muhammad Ershad, Khaleda Zia initiated an all-out movement for restoring
                                democracy. She was the architect of forming a seven-party alliance in 1983 to
                                put an
                                end to Ershad's dictatorship. She denounced the rigged election of 1986 and did
                                not
                                participate in the election while her rivals from Awami League, Jamaat-e-Islami
                                and
                                Communist Party of Bangladesh joined the election under Jatiya Party-led rule to
                                endorse the illegitimate government. Because of her determination, she was
                                detained
                                seven times from 1983 to 1990. She led the mobilisation of BNP's students' front
                                Jatiotabadi Chatra Dal (JCD) and they won 270 of 321 student unions across the
                                country. These students were instrumental in the movement that led to the fall
                                of
                                Ershad's regime. She developed a reputation as the "Uncompromising Leader" due
                                to
                                her staunch opposition against the military dictatorship of Ershad in the 1980s
                                and
                                her commitment to restoring democracy in Bangladesh. </p>
                        </section>
                        <section>

                            <p>
                                In 1991, Khaleda Zia became the country's first woman Prime Minister through a
                                free
                                and fair general election on 27 February of the year. During her premiership,
                                Bangladesh became a parliamentary democracy. Some of the major economic
                                transformations were initiated during her tenure as the Prime Minister of
                                Bangladesh. The employment rate increased drastically and in the RMG sector
                                alone,
                                the employment growth was 29% in five years. Almost two hundred thousand women
                                joined the RMG industry thanks to her policies. </p>
                        </section>
                        <section>

                            <p>
                                On the global front, she raised the Ganges water-sharing problem in the United
                                Nations to mount pressure on the neighbours to allow Bangladesh to have a fair
                                share
                                of water from the Ganges. She was invited to the White House in 1992 where she
                                raised the problem of Rohingya Muslim refugees and due to global pressure, the
                                Myanmar government entered into a deal with Bangladesh to repatriate Rohingya
                                Muslim
                                refugees who came to Bangladesh in the early 1990s.</p>
                        </section>
                        <section>

                            <p>
                                Khaleda Zia became the Prime Minister for a second consecutive term in 1996
                                after
                                the BNP had a landslide victory, but due to her commitment to hand over the
                                power to
                                a caretaker government and run for election again, she resigned within a month.
                                Though BNP lost the fresh election in June 1996, the party won 116 seats to
                                become
                                the largest opposition in the parliament in the history of Bangladesh.
                            </p>
                        </section>
                        <section>

                            <p>
                                Aiming to return to power, the BNP formed a four-party opposition alliance in
                                1999
                                with the Jatiya Party, the Jamaat-e-Islami and the Islami Oikya Jote and
                                launched
                                several agitation programmes against the ruling Awami League. Begum Khaleda Zia
                                was
                                re-elected in 2001, regaining power by promising to eliminate corruption and
                                terrorism. Forbes magazine ranked her at number 29 in 2005 in its list of the
                                hundred most powerful women in the world for her role in promoting women's
                                education
                                and empowerment of women. </p>
                        </section>
                        <section>

                            <p>
                                In 2006, she stepped down from office, passing power to a caretaker
                                administration.
                                In September 2007, she was arrested by the autocratic government on trumped-up
                                and
                                baseless charges of corruption after multiple attempts to exile her along with
                                her
                                family members. </p>
                        </section>
                        <section>

                            <p>
                                When in power, the government of Khaleda Zia made considerable progress in the
                                education sector by introducing compulsory free primary education, free
                                education
                                for girls up to 10th grade, an education "stipend" for girl students, and food
                                for
                                education programmes. Her government also increased the age limit for entry into
                                government services from 27 years to 30 years and made its highest budgetary
                                allocation to the education sector. </p>
                        </section>
                        <section>

                            <p>
                                Begum Zia holds a unique record of never losing in any constituency. She was
                                elected
                                in five separate parliamentary constituencies in the general elections of 1991,
                                1996
                                and 2001. In 2008, she won in all three constituencies from where she contested.
                            </p>
                        </section>
                        <section>

                            <p>
                                Since 2009, when the Sheikh Hasina-led government turned Bangladesh into an
                                authoritarian state, she renewed her fight for democracy. She was forcefully
                                expelled from her house by the government and was put on house arrest twice when
                                she
                                launched movements for democracy. For her commitment to democracy, she was
                                honoured
                                as “Fighter for Democracy” by New Jersey’s State Senate in 2011. </p>
                        </section>
                        <section>

                            <p>
                                Begum Khaleda Zia was sentenced to 17 years in prison in 2018 for the Zia
                                Orphanage
                                Trust and Zia Charitable Trust corruption cases. A local court found her guilty
                                of
                                abusing her position as Prime Minister by directing funds to the newly founded
                                Zia
                                Orphanage Trust. In its 2020 Country Reports on Human Rights Practices, the
                                United
                                States State Department stated, citing international and domestic legal experts,
                                that the "lack of evidence to support the conviction" shows the prosecution was
                                a
                                political ploy to remove her from the electoral process. Amnesty International
                                expressed concern that her "fair trial rights are not being respected." </p>
                        </section>
                        <section>

                            <p>
                                Begum Khaleda Zia has been a steadfast leader in opposing Sheikh Hasina's
                                authoritarian regime, championing democracy and political freedom in Bangladesh.
                                As
                                the chairperson of the BNP, she spearheaded movements against government
                                oppression,
                                mobilising grassroots support and forging alliances to challenge Hasina's rule.
                                Her
                                leadership, defined by resilience, endured house arrests, political persecution,
                                and
                                imprisonment under contentious charges. Recognised as a "Fighter for Democracy,"
                                Khaleda Zia remains a symbol of resistance, inspiring millions to stand united
                                against tyranny. Her decade-long leadership has galvanised the nation, fostering
                                hope for a democratic future and the liberation of Bangladesh from authoritarian
                                rule. </p>
                        </section>
                        <!-- </div> -->

                        <!-- tareq Rahman................................ -->
                        <!-- <div id="Acting Chairperson" class="about-item-content bg-white rounded p-5 h-100 section"> -->
                        <h4 class="text-primary text-center">Acting Chairman Tarique Rahman</h4>
                        <div style="text-align: center; margin: 30px 0;">
                            <img src="{{ asset('img/tareqrahman.jpg') }}" alt="Tarique Rahman"
                                style="border: 4px solid #ccc; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); max-width: 100%; height: auto;">
                            <p style="margin-top: 10px; font-style: italic; color: #555; text-align:center;">
                                Tarique
                                Rahman</p>
                        </div>
                        <p> Tarique Rahman (Born: 20 November 1967) is the Acting Chairman of the Bangladesh
                            Nationalist Party-BNP. He previously served as the Senior Vice-Chairman and Senior
                            Joint Secretary of the party.
                        </p>
                        <section>

                            <p>
                                Mr Rahman has witnessed Bangladesh’s liberation struggles and political
                                upheavals
                                and became a part of it. As a boy, he experienced the harsh reality of
                                Bangladesh's
                                liberation struggle alongside his mother, Begum Khaleda Zia. During the war,
                                when
                                his father, Shaheed President Ziaur Rahman Bir Uttam, declared Bangladesh's
                                independence and launched a resistance movement to liberate the country in March
                                1971, he, his mother, and his brother were arrested along with the family
                                members
                                and wives of other Bengali military officers. They were released on 16 December
                                1971
                                when his father and his compatriots led Bangladesh to victory. As a result, he
                                was
                                one of the youngest prisoners of war fighting for Bangladesh's liberation.
                            </p>
                        </section>
                        <section>

                            <p>
                                After completing his initial studies at Dhaka’s BAF Shaheen College, he enrolled
                                in
                                the Department of International Relations at the University of Dhaka in the
                                1980s.
                                At the university, he studied the political thoughts of exceptional thinkers
                                such as
                                Socrates, Plato, Aristotle, Hobbes, Locke, Rousseau, Voltaire, and Karl Marx. In
                                1986, on the eve of General Ershad’s staged election, he evaded house arrest and
                                appeared at the Press Club to address a press conference where he narrated how
                                security agencies attempted to block their movement against the lopsided
                                election.
                                Consequently, to suppress his voice, he and his mother were repeatedly put under
                                house arrest by General H. M. Ershad’s autocratic regime. </p>
                        </section>
                        <section>

                            <p>
                                He took to the streets with his mother during the anti-Ershad movement and
                                joined
                                BNP as a general member in 1988 at the Gabtali Upazila, a sub-district unit of
                                the
                                party. He mobilised people from the grassroots and contributed to the fall of
                                General Ershad's government. </p>
                        </section>
                        <section>

                            <p>
                                He campaigned with his mother, Begum Khaleda Zia, in practically every district
                                of
                                the country before the 1991 election, which they won. His mother became
                                Bangladesh's
                                first female Prime Minister. He initiated a democratic process of electing
                                leaders
                                from the grassroots in Bogura, where he was an executive member of the BNP unit.
                                In
                                1993, in the Bogura district unit, he organised a convention where leaders were
                                elected through secret ballots, serving as a model for other district units of
                                the
                                party. Following the successful conference in Bogura, he encouraged other
                                district
                                units to elect their leaders democratically. </p>
                        </section>
                        <section>

                            <p>
                                Before the 2001 election, Mr Rahman established an office in Dhaka to study
                                local-level problems and good governance. He also held discussions with
                                intellectuals and members of civil society there. Thanks to his efforts, BNP won
                                a
                                landslide victory in the 2001 elections. Despite being the chairperson's son and
                                receiving widespread support from the grassroots, he did not assume any public
                                office through nepotism and focused on empowering the party's grassroots by
                                bridging
                                the gap between representatives and the people. In recognition of his efforts to
                                strengthen the party, he was appointed as the Senior Joint Secretary of BNP by
                                the
                                Standing Committee in 2002. </p>
                        </section>
                        <section>

                            <p>
                                In 2005, Mr Rahman convened a countrywide grassroots forum that included every
                                upazila or sub-district in Bangladesh. He visited each sub-district, addressed
                                grassroots leaders and activists, held one-on-one conversations with locals,
                                shared
                                his opinions, listened to supporters' feedback, and communicated BNP's visions
                                to
                                the people. He informed communities about government subsidies for farmers,
                                allowances for the elderly, the anti-plastic bag movement to maintain ecological
                                balance, and the distribution of stipends for female students, which
                                significantly
                                increased the gender ratio in schools. He personally signed over 18,000 response
                                letters to conference registrants. These letters addressed regional issues and
                                proposed potential solutions.</p>
                        </section>
                        <section>

                            <p>
                                In 2007, Tarique Rahman was targeted by the vindictive Awami League-backed
                                military
                                regime following an unlawful takeover of power. Insiders later revealed in a
                                book
                                about the regime that the caretaker government's kingpins pressured officials
                                from
                                various agencies, including the anti-corruption commission, to file false
                                allegations against him. Additionally, he was tortured while in detention and
                                had to
                                leave the country for better medical treatment.
                            </p>
                        </section>

                        <section>
                            <p>
                                He was elected Senior Vice-Chairman of BNP in 2009 and gradually became involved
                                in
                                the party's reorganisation. In 2018, when his mother, the former three-time
                                Prime
                                Minister Begum Khaleda Zia, was imprisoned under false charges, he was nominated
                                as
                                the Acting Chairman of the party. Since then, he has been leading the
                                pro-democracy
                                movement against Sheikh Hasina’s authoritarian government.

                                In 1994, Tarique Rahman married Dr Zubaida Rahman, the daughter of the former
                                Bangladesh Navy Chief and two-time minister, Late Rear Admiral Mahbub Ali Khan.
                                Zubaida Rahman is a qualified cardiologist who studied at Dhaka Medical College.
                                They have a daughter named Zaima Zarnaz Rahman.

                            </p>
                        </section>
                        <section>
                            <p>
                                Tarique Rahman has been a defining figure in the decades-long struggle against
                                Sheikh Hasina’s authoritarian regime, leading efforts both alongside Begum
                                Khaleda
                                Zia and independently. His relentless pursuit of democracy has been marked by
                                his
                                ability to unite the BNP during turbulent times, fostering resilience among
                                party
                                members and the people of Bangladesh. Through his leadership, he guided the
                                party
                                and mobilised millions, orchestrating the July Uprising, a defining movement
                                that
                                captured the nation’s unyielding resolve in its pursuit of justice. Tarique
                                Rahman’s
                                steadfast commitment remains a cornerstone of Bangladesh’s journey towards
                                freedom
                                and the restoration of democratic governance.
                            </p>
                        </section>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection
