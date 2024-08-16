<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;

class ArticleSeeder extends Seeder
{
      /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummy_articles = [
            [
                'author' => 'Samantha Hughes',
                'title'  => 'The Evolution of Modern Technology',
                'body'   => 'Technology has dramatically evolved over the last few decades, transforming the way we live, work, and communicate. From the advent of the internet to the rise of smartphones and artificial intelligence, technological advancements have continuously reshaped our world. The digital revolution has enabled unprecedented access to information, fostering global connectivity and driving innovation across various sectors. As technology continues to advance, it is essential to consider its implications on society, ethics, and future developments. The integration of emerging technologies into daily life presents both opportunities and challenges that require thoughtful consideration and adaptation.'
            ],
            [
                'author' => 'Dr. Jonathan Miller',
                'title'  => 'Exploring the Depths of Marine Biology',
                'body'   => 'Marine biology is the scientific study of organisms in the ocean and other saltwater environments. It encompasses a wide range of disciplines, including ecology, genetics, and physiology, to understand the complex interactions between marine life and their habitats. Research in marine biology is crucial for preserving marine ecosystems and addressing environmental issues such as climate change, overfishing, and pollution. By exploring the depths of the ocean, scientists uncover new species, behaviors, and ecological processes, contributing to our understanding of biodiversity and the health of marine environments. The field of marine biology is both fascinating and vital for the conservation of our planet\'s oceans.'
            ],
            [
                'author' => 'Dr. Emily Thompson',
                'title'  => 'The Impact of Social Media on Mental Health',
                'body'   => 'Social media has become an integral part of modern life, offering platforms for communication, self-expression, and information sharing. However, its impact on mental health has become a growing concern. Research indicates that excessive use of social media can lead to issues such as anxiety, depression, and low self-esteem. The constant exposure to curated content and comparison with others can contribute to feelings of inadequacy and dissatisfaction. It is important to recognize the potential negative effects of social media and implement strategies to mitigate its impact, such as setting boundaries, fostering positive online interactions, and seeking professional support when needed.'
            ],
            [
                'author' => 'Marcus Adams',
                'title'  => 'Innovations in Renewable Energy Technologies',
                'body'   => 'The transition to renewable energy sources is crucial for addressing climate change and reducing reliance on fossil fuels. Innovations in renewable energy technologies, such as solar, wind, and hydro power, play a significant role in this transition. Advances in solar panel efficiency, wind turbine design, and energy storage solutions are driving the growth of renewable energy. These technologies offer sustainable alternatives to traditional energy sources and contribute to a reduction in greenhouse gas emissions. As the world moves towards a greener future, continued research and development in renewable energy technologies are essential for achieving global sustainability goals and mitigating environmental impacts.'
            ],
            [
                'author' => 'Dr. Robert Carter',
                'title'  => 'The Role of Artificial Intelligence in Healthcare',
                'body'   => 'Artificial intelligence (AI) is transforming the healthcare industry by enhancing diagnostic accuracy, personalizing treatment plans, and improving patient outcomes. AI algorithms can analyze vast amounts of medical data, such as imaging scans and electronic health records, to identify patterns and make predictions. This technology aids in early detection of diseases, optimizing treatment strategies, and streamlining administrative processes. The integration of AI in healthcare holds the potential to revolutionize patient care and healthcare delivery, making it more efficient and effective. However, it is essential to address ethical considerations and ensure that AI systems are used responsibly and transparently in clinical settings.'
            ],
            [
                'author' => 'Dr. Alice Bennett',
                'title'  => 'Understanding the Basics of Quantum Computing',
                'body'   => 'Quantum computing represents a new paradigm in computation, leveraging the principles of quantum mechanics to perform complex calculations at unprecedented speeds. Unlike classical computers, which use binary bits, quantum computers use quantum bits or qubits, allowing them to process and store information in multiple states simultaneously. This capability enables quantum computers to solve problems that are currently intractable for classical machines. Research in quantum computing is still in its early stages, but its potential applications span various fields, including cryptography, optimization, and drug discovery. As technology advances, quantum computing may significantly impact science, industry, and our understanding of the universe.'
            ],
            [
                'author' => 'Laura Johnson',
                'title'  => 'The Significance of Mental Health Awareness in Education',
                'body'   => 'Mental health awareness in education is essential for creating supportive and inclusive learning environments. Schools and educational institutions play a critical role in addressing mental health issues among students by providing resources, support services, and fostering open discussions. Early intervention and prevention strategies can help identify and address mental health challenges before they escalate. Educators, parents, and policymakers must work collaboratively to promote mental health awareness, reduce stigma, and ensure that students have access to the necessary support and resources. By prioritizing mental health in education, we can enhance student well-being and academic success.'
            ],
            [
                'author' => 'James Robinson',
                'title'  => 'The Future of Space Exploration',
                'body'   => 'Space exploration has captivated human imagination and driven scientific discovery for decades. The future of space exploration promises exciting advancements and new frontiers, including missions to Mars, the establishment of lunar bases, and the search for extraterrestrial life. Emerging technologies, such as reusable rockets and advanced propulsion systems, are revolutionizing space travel and reducing costs. International collaborations and private sector investments are accelerating the pace of exploration and expanding our understanding of the cosmos. As humanity ventures further into space, we face both challenges and opportunities that will shape the future of our presence in the universe.'
            ],
            [
                'author' => 'Olivia Martinez',
                'title'  => 'The Benefits of Sustainable Agriculture Practices',
                'body'   => 'Sustainable agriculture focuses on practices that maintain environmental health, economic profitability, and social equity. By adopting sustainable methods, farmers can reduce their environmental impact, conserve natural resources, and promote biodiversity. Techniques such as crop rotation, organic farming, and agroforestry enhance soil health, reduce pollution, and support resilient ecosystems. Sustainable agriculture also contributes to food security and the well-being of farming communities. As the global population grows and climate change poses challenges, embracing sustainable agricultural practices is crucial for ensuring a healthy and secure food system for future generations.'
            ],
            [
                'author' => 'Karen Wilson',
                'title'  => 'The Challenges and Opportunities of Remote Work',
                'body'   => 'Remote work has become increasingly prevalent, offering flexibility and opportunities for employees and employers alike. However, it also presents challenges, such as maintaining productivity, managing work-life balance, and fostering team collaboration. Organizations must adapt to new ways of working, including implementing effective communication tools, setting clear expectations, and supporting employee well-being. The rise of remote work also provides opportunities for businesses to access a global talent pool, reduce overhead costs, and create more inclusive work environments. Balancing the benefits and challenges of remote work requires thoughtful strategies and a commitment to evolving work practices.'
            ],
            [
                'author' => 'Rani Sari',
                'title'  => 'Exploring Bandung’s Famous Nasi Goreng',
                'body'   => 'Nasi Goreng, or fried rice, is a beloved dish in Bandung. This flavorful meal typically includes a mix of vegetables, meat, and sometimes seafood, all stir-fried with rice and a savory blend of spices. Bandung’s version often features a unique combination of local spices and ingredients, giving it a distinctive taste that sets it apart from other regional variations. The addition of crispy shallots and a fried egg on top makes it even more irresistible. Nasi Goreng is a must-try for anyone visiting Bandung, offering a delightful taste of Indonesian comfort food.'
            ],
            [
                'author' => 'Andi Prabowo',
                'title'  => 'The Delights of Bandung’s Batagor',
                'body'   => 'Batagor, short for “Bakso Tahu Goreng,” is a popular street food in Bandung. This dish consists of fried tofu and meatballs served with a rich, savory peanut sauce and a tangy vinegar-based dipping sauce. The combination of crispy and tender textures, along with the flavorful sauces, makes Batagor a favorite snack among locals and visitors alike. Its popularity in Bandung is a testament to the city’s vibrant street food culture and its ability to blend traditional flavors with innovative culinary techniques.'
            ],
            [
                'author' => 'Diana Sari',
                'title'  => 'Savoring Bandung’s Signature Sate',
                'body'   => 'Sate, or Indonesian skewered meat, is a staple of Bandung’s culinary scene. Typically made with marinated pieces of chicken, beef, or lamb, the meat is grilled to perfection and served with a rich peanut sauce or a sweet soy sauce. In Bandung, Sate is often accompanied by lontong (compressed rice cakes) and a refreshing cucumber salad. The smoky, charred flavor of the grilled meat combined with the rich sauces makes Bandung’s Sate a delectable and memorable experience for anyone exploring the city’s food culture.'
            ],
            [
                'author' => 'Eka Putri',
                'title'  => 'Discovering Bandung’s Famous Mie Kocok',
                'body'   => 'Mie Kocok is a traditional Bandung noodle dish that features chewy noodles served in a savory beef broth. The dish is typically topped with tender beef slices, fried shallots, and a sprinkle of fresh herbs. Mie Kocok is known for its rich, aromatic broth and the delicate balance of flavors. Often enjoyed as a comforting meal, it reflects the deep-rooted culinary traditions of Bandung. Whether enjoyed as a hearty lunch or a late-night snack, Mie Kocok offers a taste of Bandung’s rich culinary heritage.'
            ],
            [
                'author' => 'Budi Santoso',
                'title'  => 'Bandung’s Delicious Keripik Tempe',
                'body'   => 'Keripik Tempe, or tempeh chips, is a popular snack in Bandung. Made from fermented soybeans, tempeh is sliced thin and fried until crispy, resulting in a crunchy and flavorful snack. The chips are often seasoned with various spices, giving them a savory and sometimes spicy kick. Keripik Tempe is not only a tasty treat but also a nutritious one, as tempeh is rich in protein and essential nutrients. This snack is a great representation of Bandung’s ability to turn traditional ingredients into innovative and delicious treats.'
            ],
            [
                'author' => 'Lina Marlina',
                'title'  => 'Bandung’s Traditional Soto',
                'body'   => 'Soto is a traditional Indonesian soup that varies greatly from region to region. In Bandung, Soto is typically a hearty beef soup, enriched with spices and herbs, and served with rice or noodles. The soup often features tender beef slices, boiled eggs, and a rich broth that’s both comforting and flavorful. The addition of crispy fried shallots, fresh herbs, and a squeeze of lime enhances the overall taste, making Bandung’s Soto a must-try for anyone interested in exploring the city’s diverse culinary offerings.'
            ],
            [
                'author' => 'Fajar Wibowo',
                'title'  => 'The Unique Flavors of Bandung’s Nasi Timbel',
                'body'   => 'Nasi Timbel is a traditional Bandung dish that consists of steamed rice wrapped in banana leaves, served with a variety of accompaniments. The rice is often paired with grilled chicken, fried tofu, tempeh, and a variety of sambal (spicy chili sauces). The use of banana leaves imparts a subtle, earthy aroma to the rice, enhancing the overall dining experience. Nasi Timbel is a great representation of Bandung’s culinary traditions, offering a balanced and flavorful meal that highlights the city’s love for bold, spicy flavors.'
            ],
            [
                'author' => 'Siti Aisyah',
                'title'  => 'Bandung’s Delightful Roti Bakar',
                'body'   => 'Roti Bakar, or toasted bread, is a popular snack in Bandung. This simple yet delicious treat typically features slices of bread toasted to a crispy golden brown and filled with various sweet or savory toppings. Common fillings include chocolate, cheese, and condensed milk, creating a delightful combination of flavors and textures. Roti Bakar is often enjoyed as a quick snack or breakfast, reflecting Bandung’s knack for transforming everyday ingredients into satisfying and flavorful dishes.'
            ],
            [
                'author' => 'Adi Kurniawan',
                'title'  => 'Bandung’s Tasty Gado-Gado',
                'body'   => 'Gado-Gado is an Indonesian salad made with a variety of fresh vegetables, tofu, and hard-boiled eggs, all drizzled with a rich peanut sauce. In Bandung, Gado-Gado is served with a mix of crunchy and tender vegetables, including bean sprouts, cabbage, and carrots, complemented by the creamy and slightly sweet peanut dressing. This dish is a great example of Bandung’s ability to combine fresh ingredients with flavorful sauces to create a satisfying and nutritious meal. Gado-Gado is both delicious and versatile, making it a favorite among locals and visitors alike.'
            ],
            [
                'author' => 'Rina Pratiwi',
                'title'  => 'Bandung’s Sweet and Savory Kue Cubir',
                'body'   => 'Kue Cubir is a popular Indonesian snack that combines sweet and savory flavors in a delightful bite-sized treat. In Bandung, Kue Cubir is often made with a base of fluffy sponge cake, topped with a sweet and creamy filling, and occasionally sprinkled with savory toppings such as cheese or bacon. The contrast between the soft cake and the flavorful toppings makes Kue Cubir a unique and enjoyable snack. Whether enjoyed as a dessert or a quick snack, this treat is a testament to Bandung’s diverse and innovative culinary landscape.'
            ],
            [
                'author' => 'Rudi Santosa',
                'title'  => 'The Rich Flavors of Bandung’s Empal Gentong',
                'body'   => 'Empal Gentong is a traditional Bandung dish featuring a rich and flavorful beef stew cooked in a spicy and aromatic broth. The dish is typically made with tender beef pieces, slow-cooked with a blend of spices and herbs to create a hearty and comforting meal. Empal Gentong is often enjoyed with a side of steamed rice or fried shallots, adding extra layers of flavor and texture. This dish reflects Bandung’s culinary traditions and its love for bold, spicy flavors that leave a lasting impression on the palate.'
            ],
            [
                'author' => 'Hendri Kusuma',
                'title'  => 'Bandung’s Popular Mie Baso',
                'body'   => 'Mie Baso is a favorite noodle dish in Bandung that features tender noodles served in a savory beef broth, accompanied by meatballs and fresh vegetables. The dish is known for its rich, flavorful broth and the perfect balance of textures, from the chewy noodles to the tender meatballs. Mie Baso is often garnished with fried shallots, fresh herbs, and a touch of lime juice, enhancing its overall flavor profile. This comforting meal is a great example of Bandung’s ability to blend traditional ingredients with innovative cooking techniques to create delicious and satisfying dishes.'
            ],
            [
                'author' => 'Maya Putri',
                'title'  => 'Bandung’s Delicious Pepes Ikan',
                'body'   => 'Pepes Ikan is a traditional Indonesian dish made with fish that is marinated in a blend of spices and herbs, then wrapped in banana leaves and steamed to perfection. In Bandung, Pepes Ikan is often prepared with a variety of local spices, creating a dish that is both aromatic and flavorful. The banana leaves not only infuse the fish with a subtle, earthy aroma but also help to keep it moist and tender during cooking. Pepes Ikan is typically served with steamed rice and a side of sambal, making it a delicious and satisfying meal that showcases Bandung’s rich culinary heritage.'
            ],
        ];

        foreach ($dummy_articles as $article) {
            Article::updateOrCreate([
                'title'  => $article['title'],
            ], $article);
        }

        Cache::tags('articles')->flush();
    }
}
