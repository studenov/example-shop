<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Беговая дорожка EnergyFIT 815 new (818)',
                'code' => 'energyfit_815',
                'description' => 'Беговая дорожка EnergyFIT 815 предназначена для использования в домашних условиях.',
                'price' => '13999',
                'category_id' => 1,
                'image' => 'products/treadmill1.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Беговая дорожка EnergyFit EF-K577',
                'code' => 'energyfit_ef_k577',
                'description' => 'Электрическая беговая дорожка EnergyFIT EF-K577 с обновленным дизайном – кардиотренажер для домашнего использования.',
                'price' => '17999',
                'category_id' => 1,
                'image' => 'products/treadmill2.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Беговая дорожка Jogway TJ532C (by FitLogic)',
                'code' => 'jogway_tj532c',
                'description' => 'Беговая дорожка Jogway T532C — новая стильная и комфортная модель от Jogway для активного бега в домашних условиях.',
                'price' => '21500',
                'category_id' => 1,
                'image' => 'products/treadmill3.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Беговая дорожка EnergyFIT 510T',
                'code' => 'energyfit_510t',
                'description' => 'Беговая дорожка EnergyFIT 510T – это современный тренажер, который позволит проводить эффективные тренировки в удобное для вас время.',
                'price' => '8598',
                'category_id' => 1,
                'image' => 'products/treadmill4.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Орбитрек USA Style с сиденьем магнитный US3577',
                'code' => 'usa_style_us3577',
                'description' => 'Эллиптический тренажер (орбитрек) – эффективен для занятий по укреплению здоровья и физических тренировок в домашних условиях.',
                'price' => '11990',
                'category_id' => 2,
                'image' => 'products/orbitrack1.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Орбитрек Sportop E5500',
                'code' => 'sportop_e5500',
                'description' => 'Орбитрек Sportop E5500 — орбитрек с возможностью эллиптических движений вперед и назад.',
                'price' => '31440',
                'category_id' => 2,
                'image' => 'products/orbitrack2.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Орбитрек Reebok ZJET 460 (RVJF-12511SVBT)',
                'code' => 'reebok_rvjf_12511svbt',
                'description' => 'Орбитрек Reebok ZJET 460 Cross Trainer обеспечит вам качественные и интенсивные тренировки с приведением в тонус всех основных групп мышц, а стильный дизайн украсит и подчеркнет интерьер.',
                'price' => '25300',
                'category_id' => 2,
                'image' => 'products/orbitrack3.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Орбитрек HouseFit HB 8268ELM',
                'code' => 'housefit_hb_8268elm',
                'description' => 'Орбитрек HouseFit HB 8268ELM предназначен для тренировки сердечно-сосудистой и дыхательной систем, тренировки мышц ног и всего тела в домашних условиях.',
                'price' => '20610',
                'category_id' => 2,
                'image' => 'products/orbitrack4.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Велотренажер 7FIT T8005 Evolution (7FT8005R)',
                'code' => '7fit_7ft8005r',
                'description' => 'Велотренажер 7FIT T8005 Evolution – это тренажер, с помощью которого у вас есть отличная возможность проводить самостоятельные и регулярные тренировки.',
                'price' => '2299',
                'category_id' => 3,
                'image' => 'products/exrecise_bikes1.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Велотренажер Sportop U60',
                'code' => 'sportop_u60',
                'description' => 'Велотренажер Sportop U60 - вертикальный велотренажер для занятий спортом дома. Отличается стильным и оригинальным дизайном.',
                'price' => '21500',
                'category_id' => 3,
                'image' => 'products/exrecise_bikes2.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Велотренажер EcoFit E 510B',
                'code' => 'ecofit_e_510b',
                'description' => 'Велотренажер EcoFit E 510B – это тренажер, с помощью которого у вас есть отличная возможность проводить самостоятельные и регулярные тренировки',
                'price' => '5900',
                'category_id' => 3,
                'image' => 'products/exrecise_bikes3.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Велотренажер 7FIT Boost 8801 (7FB8801)',
                'code' => '7fit_7fi8018b',
                'description' => 'Велотренажер от ТМ 7FIT– это тренажер, с помощью которого у вас есть отличная возможность проводить самостоятельные и регулярные тренировки.',
                'price' => '5299',
                'category_id' => 3,
                'image' => 'products/exrecise_bikes4.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Скамья для пресса SТ-004 InterAtletika (SТ 004)',
                'code' => 'interatletika_st004',
                'description' => 'Универсальная скамья, которая позволяет выполнять 2 упражнения: подъем туловища на пресс и гиперэкстензию.',
                'price' => '2388',
                'category_id' => 4,
                'image' => 'products/st_training1.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Скамья для пресса ортопедическая InterFit (K103B)',
                'code' => 'interfit_k103b',
                'description' => 'Скамья для пресса ортопедическая InterFit K103B – прекрасный вариант домашнего тренажера, который поможет сделать ваш пресс красивым, не займет много места, и будет к вашим услугам в любое время суток.',
                'price' => '2424',
                'category_id' => 4,
                'image' => 'products/st_training2.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Скамья тренажер Supretto Six Pack Care (4831) (4831-0001)',
                'code' => 'supretto_4831_0001',
                'description' => 'Six Pack Care заменит для Вас до 6 тренажёров. Очень компактная конструкция. Легко складывается для экономии пространства в Вашем доме.',
                'price' => '3299',
                'category_id' => 4,
                'image' => 'products/st_training3.jpg',
                'count' => rand(0, 10)
            ],
            [
                'name' => 'Комбинированный станок InterAtletika SТ 042 (SТ042)',
                'code' => 'interatletika_st_042',
                'description' => 'Имея прочною рамную конструкцию, комбинированный станок InterAtletika CT042 выдерживает вес пользователя в 120 килограмм.',
                'price' => '6384',
                'category_id' => 4,
                'image' => 'products/st_training4.jpg',
                'count' => rand(0, 10)
            ]
        ]);
    }
}
