<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capsule;
use Illuminate\Support\Carbon;

class CapsuleSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'title' => 'AI-Капсула по генерации лидов',
                'slug' => 'ai-generaciya-lidov',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Автоматизирует поиск клиентов и написание персонализированных писем, ускоряя холодные продажи и увеличивая отклик.</p>',
                'automates' =>[
                    'Поиск лидов по должности, стране, нише',
                    'Генерация цепочек писем',
                    'Актуализация контактов и списков'
                ],
                'expected' =>[
                    '+50% к отклику с холодных писем',
                    'Снижение времени на лидогенерацию в 4 раза',
                    'Экономия до 70% на SDR'
                ],
                'image' => 'caps-13',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:06:24.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:06:24.000000Z'),
            ],
            [
                'id' => 2,
                'title' => 'AI-Капсула для реактивации старой клиентской базы',
                'slug' => 'ai-kapsula-reaktivaciya-staroj-bazy',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Возвращает «спящих» клиентов с помощью умных офферов и писем, которые приходят в нужное время.</p><p><br></p>',
                'automates' =>[
                    'Сегментация старой базы',
                    'Цепочки писем и напоминаний',
                    'Генерация повторных офферов'
                ],
                'expected' =>[
                    '+30% повторных покупокм',
                    'В 3 раза больше ответов на письма',
                    'Возврат клиентов без затрат на рекламу'
                ],
                'image' => 'caps-14',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:08:48.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:08:48.000000Z'),
            ],
            [
                'id' => 3,
                'title' => 'AI-Капсула по генерации коммерческих предложений (КП)',
                'slug' => 'ai-kapsula-generaciya-kommercheskih-predlozhenij',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Создает КП под конкретного клиента, его боли и задачи за минуты.</p><p><br></p>',
                'automates' =>[
                    'Персонализированные офферы',
                    'Структура и визуал КП',
                    'Генерация PDF/ссылки'
                ],
                'expected' =>[
                    '+40% к закрытию сделок',
                    'КП за 2 минуты',
                    'Экономия 5–10 часов в неделю'
                ],
                'image' => 'caps-16',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:10:44.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:10:44.000000Z'),
            ],
            [
                'id' => 4,
                'title' => 'AI-Капсула для e-mail / WhatsApp / Telegram',
                'slug' => 'ai-kapsula-email-whatsapp-telegram',
                'category_id' => 1,
                'type' => 'готовая',
                'is_blocked' => false,
                'content' => '<p>Обрабатывает заявки в мессенджерах 24/7, фильтрует горячих и отвечает мгновенно.</p><p><br></p>',
                'automates' =>[
                    'Мгновенные автоответы в мессенджерах',
                    'Фильтрация и передача горячих клиентов менеджеру',
                    'Запись данных в CRM'
                ],
                'expected' =>[
                    '+40% к конверсии за счёт быстрой реакции',
                    'Обработанных заявок в 3 раза больше',
                    'Экономия до 30% на зарплатах операторов'
                ],
                'image' => 'caps-35',
                'landing_url' => 'developed-capsule-page',
                'use_default_page' => false,
                'default_price' => null,
                'default_integrations' =>[null, null, null],
                'created_at' => Carbon::parse('2025-04-14T12:14:23.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:59:17.000000Z'),
            ],
            [
                'id' => 5,
                'title' => 'AI-Капсула для подготовки к встречам',
                'slug' => 'ai-kapsula-podgotovka-k-vstrecham',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Готовит краткое досье на собеседника или компанию, помогает лучше провести переговоры.</p><p><br></p>',
                'automates' =>[
                    'Анализ LinkedIn, сайта, упоминаний',
                    'Генерация вопросов',
                    'Подготовка краткой справки перед Zoom/встречей'
                ],
                'expected' =>[
                    'Увеличение конверсии во встречах',
                    'Экономия до 30 мин на подготовку',
                    'Больше уверенности и контроля'
                ],
                'image' => 'caps-17',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:15:58.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:15:58.000000Z'),
            ],
            [
                'id' => 6,
                'title' => 'AI-Капсула для анализа отзывов',
                'slug' => 'ai-kapsula-analiz-otzyvov',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Анализирует обратную связь, выявляет ключевые проблемы и тренды в фидбеке.</p><p><br></p>',
                'automates' =>[
                    'Кластеризация жалоб',
                    'Поиск повторяющихся тем',
                    'Отчёты по недовольству'
                ],
                'expected' =>[
                    'Прозрачность клиентского опыта',
                    'Снижение оттока',
                    'Быстрое реагирование на недовольство'
                ],
                'image' => 'caps-22',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:18:14.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:18:14.000000Z'),
            ],
            [
                'id' => 7,
                'title' => 'AI-Капсула по возврату клиентов',
                'slug' => 'ai-vozvrat-klientov',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Возвращает клиентов, которые давно не покупали — письмами, бонусами и офферами.</p><p><br></p>',
                'automates' =>[
                    'Сегментация "уснувших"',
                    'Генерация акций для возврата',
                    'Автописьма и напоминания'
                ],
                'expected' =>[
                    'Рост повторных продаж',
                    'Восстановление старой базы',
                    'Больше LTV без рекламы'
                ],
                'image' => 'caps-23',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:20:03.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:20:03.000000Z'),
            ],
            [
                'id' => 8,
                'title' => 'AI-Капсула для контента в LinkedIn',
                'slug' => 'ai-linkedin-content',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Помогает экспертам и бизнесам вести LinkedIn: от постов до профиля.</p><p><br></p>',
                'automates' =>[
                    'Генерация постов под ЦА',
                    'План публикаций и тем',
                    'Улучшение описания профиля'
                ],
                'expected' =>[
                    'Рост охвата и доверия',
                    'Регулярность без усилий',
                    'Лиды без рекламы'
                ],
                'image' => 'caps-34',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:23:16.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:23:16.000000Z'),
            ],
            [
                'id' => 9,
                'title' => 'AI-Капсула по ценообразованию',
                'slug' => 'ai-cenoobrazovanie',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Рассчитывает оптимальную цену с учётом конкурентов и прибыли.</p><p><br></p>',
                'automates' =>[
                    'Анализ конкурентов',
                    'Учёт себестоимости',
                    'Рекомендация цены'
                ],
                'expected' =>[
                    'Рост маржи',
                    'Уменьшение недооценки',
                    'Баланс продаж и прибыли'
                ],
                'image' => 'caps-29',
                'landing_url' => null,
                'use_default_page' => false,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:28:18.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:28:18.000000Z'),
            ],
            [
                'id' => 10,
                'title' => 'AI-Капсула по партнёрствам и коллаборациям',
                'slug' => 'ai-partnerstva-kollaboracii',
                'category_id' => 1,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Ищет потенциальных партнёров, генерирует офферы и помогает начать сотрудничество.</p><p><br></p>',
                'automates' =>[
                    'Поиск партнёров по критериям',
                    'Генерация писем и предложений',
                    'Подсказки по форматам взаимодействия'
                ],
                'expected' =>[
                    'Рост аудитории и продаж',
                    'Быстрый запуск коллабов',
                    'Без вложений в рекламу'
                ],
                'image' => 'caps-32',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:29:59.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:29:59.000000Z'),
            ],
            [
                'id' => 11,
                'title' => 'AI-Капсула для создания контента',
                'slug' => 'ai-sozdanie-kontenta',
                'category_id' => 2,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Помогает маркетологу создавать креативы, тексты, акции и посты в соцсети в 10 раз быстрее.</p><p><br></p>',
                'automates' =>[
                    'Генерация рекламных текстов и баннеров',
                    'Посты для соцсетей, e-mail и лендингов',
                    'Контент-план по ЦА и нише'
                ],
                'expected' =>[
                    '+80% к регулярности публикаций',
                    'Контент за часы, а не дни',
                    'Экономия на копирайтере и дизайнере'
                ],
                'image' => 'caps-15',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:32:00.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T13:00:23.000000Z'),
            ],
            [
                'id' => 12,
                'title' => 'AI-Капсула для PR и СМИ',
                'slug' => 'ai-pr-i-smi',
                'category_id' => 2,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Создаёт предложения для журналистов, темы публикаций и помогает попасть в медиа.</p>',
                'automates' =>[
                    'PR-питчи и заголовки',
                    'Подбор тем под нишу',
                    'Формат писем для медиа'
                ],
                'expected' =>[
                    'Упоминания в профильных СМИ',
                    'Быстрый рост доверия к бренду',
                    'Экономия на PR-агентстве'
                ],
                'image' => 'caps-18',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:40:24.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:40:24.000000Z'),
            ],
            [
                'id' => 13,
                'title' => 'AI-Капсула для SEO',
                'slug' => 'ai-seo-kapsula',
                'category_id' => 2,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Анализирует сайт, предлагает правки, пишет SEO-тексты и обновляет структуру.</p><p><br></p>',
                'automates' =>[
                    'SEO-аудит страниц',
                    'Генерация мета-тегов, заголовков',
                    'Написание SEO-описаний'
                ],
                'expected' =>[
                    'Увеличение органического трафика',
                    'Устранение ошибок без SEO-специалиста',
                    'Экономия до 70% на продвижении'
                ],
                'image' => 'caps-19',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:41:58.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:41:58.000000Z'),
            ],
            [
                'id' => 14,
                'title' => 'AI-Капсула по спикерству и ивентам',
                'slug' => 'ai-speaker-ivent',
                'category_id' => 2,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Ищет события, где можно выступить, и готовит заявку.</p><p><br></p>',
                'automates' =>[
                    'Поиск конференций по нише',
                    'Генерация описания доклада',
                    'Подача заявки'
                ],
                'expected' =>[
                    'Рост личного бренда',
                    'Прямые лиды с мероприятий',
                    'PR бесплатно'
                ],
                'image' => 'caps-25',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:44:20.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:44:20.000000Z'),
            ],
            [
                'id' => 15,
                'title' => 'AI-Капсула для подбора кандидатов',
                'slug' => 'ai-podbor-kandidatov',
                'category_id' => 3,
                'type' => 'готовая',
                'is_blocked' => false,
                'content' => '<p>Автоматизирует найм: анализирует резюме, оценивает soft skills, составляет шорт-лист.</p><p><br></p>',
                'automates' =>[
                    'Анализ резюме и формирование рейтинга кандидатов',
                    'Автоматическое тестирование soft skills',
                    'Выдача списка лучших кандидатов'
                ],
                'expected' =>[
                    'Сокращение времени найма в 3 раза',
                    'Экономия на рекрутинге до 50%',
                    'HR получает готовый список кандидатов за 1 минуту'
                ],
                'image' => 'caps-36',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:46:41.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:46:41.000000Z'),
            ],
            [
                'id' => 16,
                'title' => 'AI-Капсула — юрист по договорам',
                'slug' => 'ai-yrist',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Анализирует, редактирует и создаёт типовые договоры за минуты.</p><p><br></p>',
                'automates' =>[
                    'Проверка договоров',
                    'Подсветка рисков',
                    'Генерация нового договора по условиям'
                ],
                'expected' =>[
                    'Уменьшение юридических ошибок',
                    'Создание договора за 5 минут',
                    'Экономия на юристе'
                ],
                'image' => 'caps-21',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:48:47.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:48:47.000000Z'),
            ],
            [
                'id' => 17,
                'title' => 'AI-Капсула — разведчик конкурентов',
                'slug' => 'ai-razvedchik-concyrentov',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Следит за сайтами, ценами, рекламой и действиями конкурентов в реальном времени.</p><p><br></p>',
                'automates' =>[
                    'Мониторинг сайтов',
                    'Сравнение цен',
                    'Анализ новинок и акций'
                ],
                'expected' =>[
                    'Больше данных для стратегии',
                    'Реакция на шаги конкурента быстрее',
                    'Идеи для новых офферов'
                ],
                'image' => 'caps-24',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:50:11.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:50:11.000000Z'),
            ],
            [
                'id' => 18,
                'title' => 'AI-Капсула по Social Listening',
                'slug' => 'ai-social-listening',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Мониторит соцсети и форумы — где вас обсуждают, и как реагировать.</p><p><br></p>',
                'automates' =>[
                    'Поиск упоминаний бренда',
                    'Сигналы о негативе',
                    'Подсказки, когда и что ответить'
                ],
                'expected' =>[
                    'Контроль репутации',
                    'Быстрое вмешательство',
                    'Снижение убытков от негатива'
                ],
                'image' => 'caps-33',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:51:35.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:51:35.000000Z'),
            ],
            [
                'id' => 19,
                'title' => 'AI-Капсула по грантам и финансированию',
                'slug' => 'ai-grant-finans',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Находит доступные гранты и помогает правильно подать заявку.</p><p><br></p>',
                'automates' =>[
                    'Подбор грантов под бизнес',
                    'Генерация заявок и резюме',
                    'Отслеживание сроков подачи'
                ],
                'expected' =>[
                    'Бесплатное финансирование',
                    'Рост проекта без инвестора',
                    'Экономия на консультантах'
                ],
                'image' => 'caps-26',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:52:56.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:52:56.000000Z'),
            ],
            [
                'id' => 20,
                'title' => 'AI-Капсула — генератор бизнес-плана',
                'slug' => 'ai-generate-busines-plane',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Создает презентационный бизнес-план под запуск проекта или для инвесторов.</p><p><br></p>',
                'automates' =>[
                    'Структура плана: проблема, решение, рынок',
                    'Расчёты и финансовая модель',
                    'Отслеживание сроков подачи'
                ],
                'expected' =>[
                    'Бизнес-план за 1 час',
                    'Готовность к запуску или питчу',
                    'Экономия на консалтинге'
                ],
                'image' => 'caps-27',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:54:01.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:54:01.000000Z'),
            ],
            [
                'id' => 21,
                'title' => 'AI-Капсула по систематизации бизнеса',
                'slug' => '-ai-system-busines',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Анализирует процессы, выявляет слабые места и предлагает улучшения.</p><p><br></p>',
                'automates' =>[
                    'Анализ внутренних задач',
                    'Предложения по ролям и структуре',
                    'Рекомендации по автоматизации'
                ],
                'expected' =>[
                    'Упорядочивание хаоса',
                    'Фокус владельца на росте',
                    'Меньше затрат на управление'
                ],
                'image' => 'caps-28',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:55:05.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:55:05.000000Z'),
            ],
            [
                'id' => 22,
                'title' => 'AI-Калькулятор себестоимости',
                'slug' => 'ai-calc-sebestoimost',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Считает стоимость продукта/услуги с учётом всех переменных и маржи.</p><p><br></p>',
                'automates' =>[
                    'Учёт всех затрат',
                    'Финансовое моделирование',
                    'Формирование цены'
                ],
                'expected' =>[
                    'Чёткий контроль рентабельности',
                    'Быстрая адаптация при изменении условий',
                    'Меньше просчётов'
                ],
                'image' => 'caps-30',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:56:11.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:56:11.000000Z'),
            ],
            [
                'id' => 23,
                'title' => 'AI-Бизнес-ассистент собственника',
                'slug' => 'ai-bus-asist-sobstv',
                'category_id' => 4,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Помогает держать всё под контролем: от задач до финансов и фокуса.</p><p><br></p>',
                'automates' =>[
                    'Утренний бриф по ключевым цифрам',
                    'Напоминания, встречи, задачи',
                    'Помощь в принятии решений'
                ],
                'expected' =>[
                    'Больше ясности и фокуса',
                    'Экономия времени собственника',
                    'Без личного ассистента'
                ],
                'image' => 'caps-31',
                'landing_url' => null,
                'use_default_page' => true,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:57:23.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:57:23.000000Z'),
            ],
            [
                'id' => 24,
                'title' => 'AI-Капсула для клиентской поддержки',
                'slug' => 'ai-podderjka-clients',
                'category_id' => 5,
                'type' => 'в планах',
                'is_blocked' => false,
                'content' => '<p>Автоматизирует FAQ, предлагает ответы на частые вопросы и снижает нагрузку на операторов.</p><p><br></p>',
                'automates' =>[
                    'Классификация обращений',
                    'Ответы на типовые запросы',
                    'Поддержка базы знаний'
                ],
                'expected' =>[
                    'Меньше звонков и сообщений',
                    'Клиенты получают ответ сразу',
                    'Снижение затрат на саппорт'
                ],
                'image' => 'caps-20',
                'landing_url' => null,
                'use_default_page' => false,
                'default_price' => '94000.00',
                'default_integrations' =>['CRM-системы <span class="opacity-color-50">Битрикс24, AmoCRM, HubSpot и др.</span>', 'Мессенджеры <span class="opacity-color-50">WhatsApp, Telegram, Instagram и др.</span>', 'Системы аналитики и учёта <span class="opacity-color-50"></span>'],
                'created_at' => Carbon::parse('2025-04-14T12:58:29.000000Z'),
                'updated_at' => Carbon::parse('2025-04-14T12:58:29.000000Z'),
            ],
        ];

        foreach ($data as $item) {
            Capsule::updateOrCreate(['id' => $item['id']], $item);
        }

        echo "✅ Capsules seeded successfully.\n";
    }
}
