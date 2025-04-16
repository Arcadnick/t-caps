<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::updateOrCreate(
            ['slug' => 'privacy-policy'],
            ['title' => 'Политика конфиденциальности', 'content' => '<section class="hero-section legal-page">
    <div class="container">
        <div class="heading-privacy-block">
            <div class="flex-vertical center-aling">
                <div class="standart-text semi-bold blue-font"><strong>Дата последнего обновления:</strong> 04.10.2025</div>
                <h1>Политика конфиденциальности</h1>
            </div>
            <div class="text-block center-aling">
                <div class="subheader">Для нас важна ваша конфиденциальность. Мы уважаем вашу<br>конфиденциальность в отношении любой информации, которую мы можем<br>получить от вас на нашем сайте.</div>
            </div>
        </div>
    </div>
</section>
<section class="section no-top-padding">
    <div class="container">
        <div class="legal-inf-block">
            <div class="text-block gap-24">
                <div class="legal-text">Настоящим я, являясь пользователем сайта<a href="https://timecaps.pro" class="black-link"> https://timecaps.pro</a> (далее — «Сайт»), свободно, своей волей и в своем интересе даю согласие владельцу Сайта на обработку моих персональных данных на следующих условиях:</div>
            </div>
            <div class="h3-block">
                <h3>1. Перечень персональных данных:</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">Фамилия, имя, отчество (если указаны);<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Контактный номер телефона;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Адрес электронной почты;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Другая информация, предоставленная пользователем в рамках использования Сайта (например, при заполнении форм).<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>2. Цели обработки:</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">Обработка входящих запросов и заявок;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Консультации и обратная связь;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Предоставление информации о продуктах и услугах;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Улучшение качества сервиса и пользовательского опыта;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Выполнение обязательств перед пользователями.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>3. Способы обработки:</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">Сбор, систематизация, хранение, уточнение, использование, обезличивание, удаление персональных данных;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Обработка осуществляется как с использованием средств автоматизации, так и без них.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>4. Срок обработки:</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">До достижения целей обработки или до отзыва согласия пользователем.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>5. Права пользователя:</h3>
                <div class="text-block gap-18">
                    <div class="legal-text">Пользователь имеет право:</div>
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">Запросить информацию об обработке своих персональных данных;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Требовать исправления, блокировки или удаления своих данных;<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Отозвать согласие, направив соответствующее уведомление на электронную почту: <a href="mailto:hello@timecaps.pro" class="black-link">hello@timecaps.pro</a><br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>6. Прочие условия:</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page">
                        <li class="list-item">
                            <div class="legal-text">Персональные данные не передаются третьим лицам без согласия пользователя, за исключением случаев, предусмотренных законодательством.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Согласие может быть отозвано в любой момент по инициативе пользователя.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <div class="text-block gap-18">
                    <div class="divider-trout"></div>
                    <div class="legal-text"><strong>Подтверждая отправку данных на сайте, пользователь выражает согласие с условиями настоящего документа.</strong><br></div>
                </div>
            </div>
        </div>
    </div>
</section>']
        );

        Page::updateOrCreate(
            ['slug' => 'terms-and-conditions'],
            ['title' => 'Условия обслуживания', 'content' => '<section class="hero-section legal-page">
    <div class="container">
        <div class="heading-privacy-block">
            <div class="flex-vertical center-aling">
                <div class="standart-text semi-bold blue-font"><strong>Дата последнего обновления:</strong> 04.10.2025</div>
                <h1>Пользовательское соглашение</h1>
            </div>
            <div class="text-block center-aling">
                <div class="subheader">Политика конфиденциальности Общества с ограниченной ответственностью<br>«T-caps», разработана в соответствии с положениями законодательства<br>Российской Федерации и Правилами использования Сервиса Приложения</div>
            </div>
        </div>
    </div>
</section>
<section class="section no-top-padding">
    <div class="container">
        <div class="legal-inf-block">
            <div class="text-block gap-18">
                <div class="legal-text">Настоящее Пользовательское соглашение (далее — «Соглашение») регулирует отношения между владельцем сайта<a href="https://timecaps.pro" target="_blank" class="black-link"> https://timecaps.pro</a> (далее — «Администрация») и любым пользователем Сайта (далее — «Пользователь»), который получает доступ к информации, сервисам и функциональности, размещённым на Сайте, включая доступ к AI-капсулам.</div>
                <div class="legal-text">Пользуясь Сайтом, Пользователь подтверждает своё согласие с условиями настоящего Соглашения. В случае несогласия с условиями пользователь обязан прекратить использование Сайта.</div>
            </div>
            <div class="h3-block">
                <h3>1. Общие положения</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">1.1 Сайт <a href="https://timecaps.pro" target="_blank" class="black-link">timecaps.pro</a> предоставляет Пользователю доступ к информационным и консультационным материалам, а также к специализированным программным модулям — AI-капсулам.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">1.1 Администрация вправе изменять функционал Сайта, перечень доступных AI-капсул и условия использования без предварительного уведомления.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>2. Обязательства Пользователя</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">2.1. Пользователь обязуется использовать AI-капсулы исключительно в рамках действующего законодательства и деловой этики.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">2.2. Запрещается использование AI-капсул для распространения спама, введения в заблуждение, нарушения прав третьих лиц, а также в целях, противоречащих законодательству.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">2.3. Пользователь несет ответственность за любые действия, совершённые с использованием предоставленного ему доступа.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>3. Предоставление доступа к AI-капсулам</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">3.1. AI-капсулы могут предоставляться в формате ознакомительного или коммерческого использования.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">3.2. Условия доступа к каждой AI-капсуле (бесплатно, по подписке или разовому подключению) определяются Администрацией и указаны на соответствующей странице Сайта.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">3.3. Некоторые AI-капсулы могут находиться в стадии разработки.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">3.4. Использование капсулы не гарантирует определённого результата и предоставляется &quot;как есть&quot;.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>4. Интеллектуальная собственность</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">4.1. Все материалы, размещённые на Сайте, включая тексты, дизайн, AI-капсулы, алгоритмы и визуальные элементы, являются интеллектуальной собственностью Администрации или её партнёров.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">4.2. Копирование, модификация, распространение и иное использование контента Сайта и AI-капсул без письменного согласия запрещены.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>5. Обработка персональных данных</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">5.1. Обработка осуществляется согласно Политике обработки персональных данных.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">5.2. Отправляя данные через формы на Сайте, Пользователь даёт согласие на их обработку.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>6. Ответственность</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">6.1. Администрация не несёт ответственности за возможный ущерб, причинённый в результате использования AI-капсул, в том числе при некорректных данных или неправильном применении.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">6.2. Администрация не гарантирует бесперебойную работу Сайта и капсул, но прилагает все усилия для обеспечения стабильности.<br></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>7. Заключительные положения</h3>
                <div class="text-block gap-18">
                    <ul role="list" class="list-legal-page number">
                        <li class="list-item">
                            <div class="legal-text">7.1. Настоящее Соглашение вступает в силу с момента первого использования Сайта.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">7.2. Все споры, возникающие из данного Соглашения, подлежат разрешению в соответствии с законодательством Российской Федерации.<br></div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">7.3. Контактная почта для связи: <a href="mailto:hello@timecaps.pro" class="black-link">hello@timecaps.pro</a><br></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>']
        );

        Page::updateOrCreate(
            ['slug' => 'develop-generated-capsule'],
            [
                'title' => 'Сгенерированная капсула',
                'content' => '',
                'price' => 10000,
            ]
        );
    }
}
