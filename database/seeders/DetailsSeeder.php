<?php

namespace Database\Seeders;

use App\Models\Details;
use Illuminate\Database\Seeder;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail = [
            [
                'book_id' => '1',
                'author' => 'Aldous Huxley',
                'publisher' => 'Chatto & Windus',
                'year' => '1932',
                'description' => "rave New World is a dystopian social science fiction novel by English author Aldous Huxley, written in 1931 and published in 1932. Largely set in a futuristic World State, whose citizens are environmentally engineered into an intelligence-based social hierarchy, the novel anticipates huge scientific advancements in reproductive technology, sleep-learning, psychological manipulation and classical conditioning that are combined to make a dystopian society which is challenged by only a single individual: the story's protagonist. Huxley followed this book with a reassessment in essay form, Brave New World Revisited (1958), and with his final novel, Island (1962), the utopian counterpart. The novel is often compared to George Orwell's Nineteen Eighty-Four (published 1949). In 1999, the Modern Library ranked Brave New World at number 5 on its list of the 100 best English-language novels of the 20th century.[2] In 2003, Robert McCrum, writing for The Observer, included Brave New World chronologically at number 53 in the top 100 greatest novels of all time, and the novel was listed at number 87 on The Big Read survey by the BBC.[4] Despite this, Brave New World has frequently been banned and challenged since its original publication. It has landed on the American Library Association list of top 100 banned and challenged books of the decade since the association began the list in 1990",
            ],
            [
                'book_id' => '2',
                'author' => 'Tobey Maguire as Nick Carraway',
                'publisher' => 'Charles Scribner s Sons',
                'year' => '1925',
                'description' => "The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan. The novel was inspired by a youthful romance Fitzgerald had with socialite Ginevra King, and the riotous parties he attended on Long Island's North Shore in 1922. Following a move to the French Riviera, Fitzgerald completed a rough draft of the novel in 1924. He submitted it to editor Maxwell Perkins, who persuaded Fitzgerald to revise the work over the following winter. After making revisions, Fitzgerald was satisfied with the text, but remained ambivalent about the book's title and considered several alternatives. Painter Francis Cugat's cover art greatly impressed Fitzgerald, and he incorporated aspects of it into the novel. ",
            ],
            [
                'book_id' => '3',
                'author' => 'Carl Sagan',
                'publisher' => 'Random House',
                'year' => '1980',
                'description' => "Cosmos is a 1980 popular science book by astronomer and Pulitzer Prize-winning author Carl Sagan. Its 13 illustrated chapters, corresponding to the 13 episodes of the Cosmos TV series, which the book was co-developed with and intended to complement, explore the mutual development of science and civilization. One of Sagan's main purposes for the book and television series was to explain complex scientific ideas to anyone interested in learning. Sagan also believed the television was one of the greatest teaching tools ever invented, so he wished to capitalize on his chance to educate the world.[1] Spurred in part by the popularity of the TV series, Cosmos spent 50 weeks on the Publishers Weekly best-sellers list and 70 weeks on the New York Times Best Seller list to become the best-selling science book ever published at the time. In 1981, it received the Hugo Award for Best Non-Fiction Book. The book's unprecedented success ushered in a dramatic increase in visibility for science-themed literature. The success of the book also jumpstarted Sagan's literary career. The sequel to Cosmos is Pale Blue Dot: A Vision of the Human Future in Space (1994).",
            ],
            [
                'book_id' => '4',
                'author' => 'Bill Bryson',
                'publisher' => 'Doubleday (UK) and Broadway Books (US)',
                'year' => '2023',
                'description' => "A Short History of Nearly Everything by American-British author Bill Bryson is a popular science book that explains some areas of science, using easily accessible language that appeals more to the general public than many other books dedicated to the subject. It was one of the bestselling popular science books of 2005 in the United Kingdom, selling over 300,000 copies. A Short History deviates from Bryson's popular travel book genre, instead describing general sciences such as chemistry, paleontology, astronomy, and particle physics. In it, he explores time from the Big Bang to the discovery of quantum mechanics, via evolution and geology. ",
            ],
            [
                'book_id' => '5',
                'author' => 'Alex Xu',
                'publisher' => 'Independently Published',
                'year' => '2017',
                'description' => 'The system design interview is considered to be the most complex and most difficult technical job interview by many. This book provides a step-by-step framework on how to tackle a system design question. It includes many real-world examples to illustrate the systematic approach with detailed steps that you can follow.',
            ],
            [
                'book_id' => '6',
                'author' => 'William M Springer',
                'publisher' => 'Jaxson Media',
                'year' => '2019',
                'description' => "You know how to code..but is it enough?Do you feel left out when other programmers talk about asymptotic bounds?Have you failed a job interview because you don't know computer science?The author, a senior developer at a major software company with a PhD in computer science, takes you through what you would have learned while earning a four-year computer science degree. Volume one covers the most frequently referenced topics, including:-Algorithms and data structures-Graphs-Problem-solving techniques-Complexity theoryWhen you finish this book, you'll have the tools you need to hold your own with people who have - or expect you to have - a computer science degree.",
            ],
            [
                'book_id' => '7',
                'author' => 'Ina Garten',
                'publisher' => 'Clarkson Potter/Ten Speed',
                'year' => '2020',
                'description' => "#1 NEW YORK TIMES BESTSELLER • A collection of all-new soul-satisfying dishes from America’s favorite home cook! NAMED ONE OF THE BEST COOKBOOKS OF THE YEAR BY The New York Times Book Review • Food Network • The Washington Post • The Atlanta Journal-Constitution • Town & Country",
            ],
            [
                'book_id' => '8',
                'author' => 'Ina Garten',
                'publisher' => 'Simon & Schuster (U.S.)',
                'year' => '2011',
                'description' => "Steve Jobs is the authorized self-titled biography of American business magnate and Apple co-founder Steve Jobs. The book was written at the request of Jobs by Walter Isaacson, a former executive at CNN and TIME who has written best-selling biographies of Benjamin Franklin and Albert Einstein",
            ],
            [
                'book_id' => '9',
                'author' => 'Emily Brontë',
                'publisher' => 'Thomas Cautley Newby',
                'year' => '1847',
                'description' => "Wuthering Heights is an 1847 novel by Emily Brontë, initially published under the pseudonym Ellis Bell. It concerns two families of the landed gentry living on the West Yorkshire moors, the Earnshaws and the Lintons, and their turbulent relationships with Earnshaw's adopted son, Heathcliff",
            ],
            [
                'book_id' => '10',
                'author' => 'Hiroshi Fujimoto, Fujiko Fujio',
                'publisher' => '21st Century Publishing House',
                'year' => '1969',
                'description' => "Doraemon is a Japanese manga series written and illustrated by Fujiko F. Fujio. The manga was first serialized in December 1969, with its 1,345 individual chapters compiled into 45 tankōbon volumes, published by Shogakukan from 1970 to 1996.",
            ],
            [
                'book_id' => '11',
                'author' => 'Jake VanderPlas',
                'publisher' => "'O'Reilly Media, Inc.",
                'year' => '2016',
                'description' => "Doraemon is a Japanese manga series written and illustrated by Fujiko F. Fujio. The manga was first serialized in December 1969, with its 1,345 individual chapters compiled into 45 tankōbon volumes, published by Shogakukan from 1970 to 1996.",
            ],
            [
                'book_id' => '12',
                'author' => 'F G Fowler; H W Fowler; R E Allen',
                'publisher' => "Oxford [Oxfordshire] : Clarendon Press ; New York : Oxford University Press,",
                'year' => '2016',
                'description' => "Succinct coverage of the vocabulary of everyday life (55,000 entries and 80,000 definitions), including phrases, idioms and abbreviations. Special attention is paid to the new language of technology and the information sciences.",
            ]
        ];
        foreach ($detail as $key => $value){
            Details::create($value);
        }
    }
}
