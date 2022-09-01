<?php

namespace Database\Seeders;

use App\Models\Helium\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $countries = [

        //     ['arabic' => 'أفغانستان'],
        //     ['arabic' => 'ألبانيا'],
        //     ['arabic' => 'الجزائر'],
        //     ['arabic' => 'أندورا'],
        //     ['arabic' => 'أنغولا'],
        //     ['arabic' => 'أنتيغوا وبربودا'],
        //     ['arabic' => 'الأرجنتين'],
        //     ['arabic' => 'أرمينيا'],
        //     ['arabic' => 'أستراليا'],
        //     ['arabic' => 'النمسا'],
        //     ['arabic' => 'أذربيجان'],
        //     ['arabic' => 'جزر البهاما'],
        //     ['arabic' => 'البحرين'],
        //     ['arabic' => 'بنغلاديش'],
        //     ['arabic' => 'بربادوس'],
        //     ['arabic' => 'بيلاروس'],
        //     ['arabic' => 'بلجيكا'],
        //     ['arabic' => 'بليز'],
        //     ['arabic' => 'بنن'],
        //     ['arabic' => 'بوتان'],
        //     ['arabic' => 'بوليفيا (دولة - المتعددة القوميات)'],
        //     ['arabic' => 'البوسنة والهرسك'],
        //     ['arabic' => 'بوتسوانا'],
        //     ['arabic' => 'البرازيل'],
        //     ['arabic' => 'بروني دار السلام'],
        //     ['arabic' => 'بلغاريا'],
        //     ['arabic' => 'بوركينا فاسو'],
        //     ['arabic' => 'بوروندي'],
        //     ['arabic' => 'كابو فيردي'],
        //     ['arabic' => 'كمبوديا'],
        //     ['arabic' => 'الكاميرون'],
        //     ['arabic' => 'كندا'],
        //     ['arabic' => 'جمهورية أفريقيا الوسطى'],
        //     ['arabic' => 'تشاد'],
        //     ['arabic' => 'شيلي'],
        //     ['arabic' => 'الصين'],
        //     ['arabic' => 'كولومبيا'],
        //     ['arabic' => 'جزر القمر'],
        //     ['arabic' => 'الكونغو'],
        //     ['arabic' => 'كوستاريكا'],
        //     ['arabic' => 'كوت ديفوار'],
        //     ['arabic' => 'كرواتيا'],
        //     ['arabic' => 'كوبا'],
        //     ['arabic' => 'قبرص'],
        //     ['arabic' => 'تشيكيا'],
        //     ['arabic' => 'جمهورية كوريا الشعبية الديمقراطية'],
        //     ['arabic' => 'جمهورية الكونغو الديمقراطية'],
        //     ['arabic' => 'الدانمرك'],
        //     ['arabic' => 'جيبوتي'],
        //     ['arabic' => 'دومينيكا'],
        //     ['arabic' => 'الجمهورية الدومينيكية'],
        //     ['arabic' => 'إكوادور'],
        //     ['arabic' => 'مصر'],
        //     ['arabic' => 'السلفادور'],
        //     ['arabic' => 'غينيا الاستوائية'],
        //     ['arabic' => 'إريتريا'],
        //     ['arabic' => 'إستونيا'],
        //     ['arabic' => 'إسواتيني'],
        //     ['arabic' => 'إثيوبيا'],
        //     ['arabic' => 'فيجي'],
        //     ['arabic' => 'فنلندا'],
        //     ['arabic' => 'فرنسا'],
        //     ['arabic' => 'غابون'],
        //     ['arabic' => 'غامبيا'],
        //     ['arabic' => 'جورجيا'],
        //     ['arabic' => 'ألمانيا'],
        //     ['arabic' => 'غانا'],
        //     ['arabic' => 'اليونان'],
        //     ['arabic' => 'غرينادا'],
        //     ['arabic' => 'غواتيمالا'],
        //     ['arabic' => 'غينيا'],
        //     ['arabic' => 'غينيا - بيساو'],
        //     ['arabic' => 'غيانا'],
        //     ['arabic' => 'هايتي'],
        //     ['arabic' => 'هندوراس'],
        //     ['arabic' => 'هنغاريا'],
        //     ['arabic' => 'آيسلندا'],
        //     ['arabic' => 'الهند'],
        //     ['arabic' => 'إندونيسيا'],
        //     ['arabic' => 'إيران (جمهورية - الإسلامية)'],
        //     ['arabic' => 'العراق'],
        //     ['arabic' => 'أيرلندا'],
        //     ['arabic' => 'إسرائيل'],
        //     ['arabic' => 'إيطاليا'],
        //     ['arabic' => 'جامايكا'],
        //     ['arabic' => 'اليابان'],
        //     ['arabic' => 'الأردن'],
        //     ['arabic' => 'كازاخستان'],
        //     ['arabic' => 'كينيا'],
        //     ['arabic' => 'كيريباس'],
        //     ['arabic' => 'الكويت'],
        //     ['arabic' => 'قيرغيزستان'],
        //     ['arabic' => 'جمهورية لاو الديمقراطية الشعبية'],
        //     ['arabic' => 'لاتفيا'],
        //     ['arabic' => 'لبنان'],
        //     ['arabic' => 'ليسوتو'],
        //     ['arabic' => 'ليبريا'],
        //     ['arabic' => 'ليبيا'],
        //     ['arabic' => 'ليختنشتاين'],
        //     ['arabic' => 'ليتوانيا'],
        //     ['arabic' => 'لكسمبرغ'],
        //     ['arabic' => 'مدغشقر'],
        //     ['arabic' => 'ملاوي'],
        //     ['arabic' => 'ماليزيا'],
        //     ['arabic' => 'ملديف'],
        //     ['arabic' => 'مالي'],
        //     ['arabic' => 'مالطة'],
        //     ['arabic' => 'جزر مارشال'],
        //     ['arabic' => 'موريتانيا'],
        //     ['arabic' => 'موريشيوس'],
        //     ['arabic' => 'المكسيك'],
        //     ['arabic' => 'ميكرونيزيا (ولايات - الموحدة)'],
        //     ['arabic' => 'موناكو'],
        //     ['arabic' => 'منغوليا'],
        //     ['arabic' => 'الجبل الأسود'],
        //     ['arabic' => 'المغرب'],
        //     ['arabic' => 'موزامبيق'],
        //     ['arabic' => 'ميانمار'],
        //     ['arabic' => 'ناميبيا'],
        //     ['arabic' => 'ناورو'],
        //     ['arabic' => 'نيبال'],
        //     ['arabic' => 'هولندا'],
        //     ['arabic' => 'نيوزيلندا'],
        //     ['arabic' => 'نيكاراغوا'],
        //     ['arabic' => 'النيجر'],
        //     ['arabic' => 'نيجيريا'],
        //     ['arabic' => 'مقدونيا الشمالية'],
        //     ['arabic' => 'النرويج'],
        //     ['arabic' => 'عمان'],
        //     ['arabic' => 'باكستان'],
        //     ['arabic' => 'بالاو'],
        //     ['arabic' => 'بنما'],
        //     ['arabic' => 'بابوا غينيا الجديدة'],
        //     ['arabic' => 'باراغواي'],
        //     ['arabic' => 'بيرو'],
        //     ['arabic' => 'الفلبين'],
        //     ['arabic' => 'بولندا'],
        //     ['arabic' => 'البرتغال'],
        //     ['arabic' => 'قطر'],
        //     ['arabic' => 'جمهورية كوريا'],
        //     ['arabic' => 'جمهورية مولدوفا'],
        //     ['arabic' => 'رومانيا'],
        //     ['arabic' => 'الاتحاد الروسي'],
        //     ['arabic' => 'رواندا'],
        //     ['arabic' => 'سانت كيتس ونيفس'],
        //     ['arabic' => 'سانت لوسيا'],
        //     ['arabic' => 'سانت فنسنت وجزر غرينادين'],
        //     ['arabic' => 'ساموا'],
        //     ['arabic' => 'سان مارينو'],
        //     ['arabic' => 'سان تومي وبرينسيبي'],
        //     ['arabic' => 'المملكة العربية السعودية'],
        //     ['arabic' => 'السنغال'],
        //     ['arabic' => 'صربيا'],
        //     ['arabic' => 'سيشيل'],
        //     ['arabic' => 'سيراليون'],
        //     ['arabic' => 'سنغافورة'],
        //     ['arabic' => 'سلوفاكيا'],
        //     ['arabic' => 'سلوفينيا'],
        //     ['arabic' => 'جزر سليمان'],
        //     ['arabic' => 'الصومال'],
        //     ['arabic' => 'جنوب أفريقيا'],
        //     ['arabic' => 'جنوب السودان'],
        //     ['arabic' => 'إسبانيا'],
        //     ['arabic' => 'سري لانكا'],
        //     ['arabic' => 'السودان'],
        //     ['arabic' => 'سورينام'],
        //     ['arabic' => 'السويد'],
        //     ['arabic' => 'سويسرا'],
        //     ['arabic' => 'الجمهورية العربية السورية'],
        //     ['arabic' => 'طاجيكستان'],
        //     ['arabic' => 'تايلند'],
        //     ['arabic' => 'تيمور- ليشتي'],
        //     ['arabic' => 'توغو'],
        //     ['arabic' => 'تونغا'],
        //     ['arabic' => 'ترينيداد وتوباغو'],
        //     ['arabic' => 'تونس'],
        //     ['arabic' => 'تركيا'],
        //     ['arabic' => 'تركمانستان'],
        //     ['arabic' => 'توفالو'],
        //     ['arabic' => 'أوغندا'],
        //     ['arabic' => 'أوكرانيا'],
        //     ['arabic' => 'الإمارات العربية المتحدة'],
        //     ['arabic' => 'المملكة المتحدة لبريطانيا العظمى وأيرلندا الشمالية'],
        //     ['arabic' => 'جمهورية تنزانيا المتحدة'],
        //     ['arabic' => 'الولايات المتحدة الأمريكية'],
        //     ['arabic' => 'أوروغواي'],
        //     ['arabic' => 'أوزبكستان'],
        //     ['arabic' => 'فانواتو'],
        //     ['arabic' => 'فنزويلا (جمهورية - البوليفارية)'],
        //     ['arabic' => 'فييت نام'],
        //     ['arabic' => 'اليمن'],
        //     ['arabic' => 'زامبيا'],
        //     ['arabic' => 'زمبابوي'],
        //     ['arabic' => 'دولة فلسطين '],

        // ];



        $countries = [
            ['name' => 'غير محدد'], // 1
            ['name' => "أفغانستان"], // 2
            ['name' => "ألبانيا"], // 3
            ['name' => "الجزائر"], // 4
            ['name' => "أندورا"], // 5
            ['name' => "أنغولا"], // 6
            ['name' => "أنتيغوا وبربودا"], // 7
            ['name' => "الأرجنتين"], // 8
            ['name' => "أرمينيا"], // 9
            ['name' => "أستراليا"], // 10
            ['name' => "النمسا"], // 11
            ['name' => "أذربيجان"], // 12
            ['name' => "جزر البهاما"], // 13
            ['name' => "البحرين"], // 14
            ['name' => "بنغلاديش"], // 15
            ['name' => "بربادوس"], // 16
            ['name' => "بيلاروس"], // 17
            ['name' => "بلجيكا"], // 18
            ['name' => "بليز"], // 19
            ['name' => "بنن"], // 20
            ['name' => "بوتان"], // 21
            ['name' => "بوليفيا (دولة - المتعددة القوميات)"], // 22
            ['name' => "البوسنة والهرسك"], // 23
            ['name' => "بوتسوانا"], // 24
            ['name' => "البرازيل"], // 25
            ['name' => "بروني دار السلام"], // 26
            ['name' => "بلغاريا"], // 27
            ['name' => "بوركينا فاسو"], // 28
            ['name' => "بوروندي"], // 29
            ['name' => "كابو فيردي"], // 30
            ['name' => "كمبوديا"], // 31
            ['name' => "الكاميرون"], // 32
            ['name' => "كندا"], // 33
            ['name' => "جمهورية أفريقيا الوسطى"], // 34
            ['name' => "تشاد"], // 35
            ['name' => "شيلي"], // 36
            ['name' => "الصين"], // 37
            ['name' => "كولومبيا"], // 38
            ['name' => "جزر القمر"], // 39
            ['name' => "الكونغو"], // 40
            ['name' => "كوستاريكا"], // 41
            ['name' => "كوت ديفوار"], // 42
            ['name' => "كرواتيا"], // 43
            ['name' => "كوبا"], // 44
            ['name' => "قبرص"], // 45
            ['name' => "تشيكيا"], // 46
            ['name' => "جمهورية كوريا الشعبية الديمقراطية"], // 47
            ['name' => "جمهورية الكونغو الديمقراطية"], // 48
            ['name' => "الدانمرك"], // 49
            ['name' => "جيبوتي"], // 50
            ['name' => "دومينيكا"], // 51
            ['name' => "الجمهورية الدومينيكية"], // 52
            ['name' => "إكوادور"], // 53
            ['name' => "مصر"], // 54
            ['name' => "السلفادور"], // 55
            ['name' => "غينيا الاستوائية"], // 56
            ['name' => "إريتريا"], // 57
            ['name' => "إستونيا"], // 58
            ['name' => "إسواتيني"], // 59
            ['name' => "إثيوبيا"], // 60
            ['name' => "فيجي"], // 61
            ['name' => "فنلندا"], // 62
            ['name' => "فرنسا"], // 63
            ['name' => "غابون"], // 64
            ['name' => "غامبيا"], // 65
            ['name' => "جورجيا"], // 66
            ['name' => "ألمانيا"], // 67
            ['name' => "غانا"], // 68
            ['name' => "اليونان"], // 69
            ['name' => "غرينادا"], // 70
            ['name' => "غواتيمالا"], // 71
            ['name' => "غينيا"], // 72
            ['name' => "غينيا - بيساو"], // 73
            ['name' => "غيانا"], // 74
            ['name' => "هايتي"], // 75
            ['name' => "هندوراس"], // 76
            ['name' => "هنغاريا"], // 77
            ['name' => "آيسلندا"], // 78
            ['name' => "الهند"], // 79
            ['name' => "إندونيسيا"], // 80
            ['name' => "إيران (جمهورية - الإسلامية)"], // 81
            ['name' => "العراق"], // 82
            ['name' => "أيرلندا"], // 83
            ['name' => "إسرائيل"], // 84
            ['name' => "إيطاليا"], // 85
            ['name' => "جامايكا"], // 86
            ['name' => "اليابان"], // 87
            ['name' => "الأردن"], // 88
            ['name' => "كازاخستان"], // 89
            ['name' => "كينيا"], // 90
            ['name' => "كيريباس"], // 91
            ['name' => "الكويت"], // 92
            ['name' => "قيرغيزستان"], // 93
            ['name' => "جمهورية لاو الديمقراطية الشعبية"], // 94
            ['name' => "لاتفيا"], // 95
            ['name' => "لبنان"], // 96
            ['name' => "ليسوتو"], // 97
            ['name' => "ليبريا"], // 98
            ['name' => "ليبيا"], // 99
            ['name' => "ليختنشتاين"], // 100
            ['name' => "ليتوانيا"], // 101
            ['name' => "لكسمبرغ"], // 102
            ['name' => "مدغشقر"], // 103
            ['name' => "ملاوي"], // 104
            ['name' => "ماليزيا"], // 105
            ['name' => "ملديف"], // 106
            ['name' => "مالي"], // 107
            ['name' => "مالطة"], // 108
            ['name' => "جزر مارشال"], // 109
            ['name' => "موريتانيا"], // 110
            ['name' => "موريشيوس"], // 111
            ['name' => "المكسيك"], // 112
            ['name' => "ميكرونيزيا (ولايات - الموحدة)"], // 113
            ['name' => "موناكو"], // 114
            ['name' => "منغوليا"], // 115
            ['name' => "الجبل الأسود"], // 116
            ['name' => "المغرب"], // 117
            ['name' => "موزامبيق"], // 118
            ['name' => "ميانمار"], // 119
            ['name' => "ناميبيا"], // 120
            ['name' => "ناورو"], // 121
            ['name' => "نيبال"], // 122
            ['name' => "هولندا"], // 123
            ['name' => "نيوزيلندا"], // 124
            ['name' => "نيكاراغوا"], // 125
            ['name' => "النيجر"], // 126
            ['name' => "نيجيريا"], // 127
            ['name' => "مقدونيا الشمالية"], // 128
            ['name' => "النرويج"], // 129
            ['name' => "عمان"], // 130
            ['name' => "باكستان"], // 131
            ['name' => "بالاو"], // 132
            ['name' => "بنما"], // 133
            ['name' => "بابوا غينيا الجديدة"], // 134
            ['name' => "باراغواي"], // 135
            ['name' => "بيرو"], // 136
            ['name' => "الفلبين"], // 137
            ['name' => "بولندا"], // 138
            ['name' => "البرتغال"], // 139
            ['name' => "قطر"], // 140
            ['name' => "جمهورية كوريا"], // 141
            ['name' => "جمهورية مولدوفا"], // 142
            ['name' => "رومانيا"], // 143
            ['name' => "الاتحاد الروسي"], // 144
            ['name' => "رواندا"], // 145
            ['name' => "سانت كيتس ونيفس"], // 146
            ['name' => "سانت لوسيا"], // 147
            ['name' => "سانت فنسنت وجزر غرينادين"], // 148
            ['name' => "ساموا"], // 149
            ['name' => "سان مارينو"], // 150
            ['name' => "سان تومي وبرينسيبي"], // 151
            ['name' => "المملكة العربية السعودية"], // 152
            ['name' => "السنغال"], // 153
            ['name' => "صربيا"], // 154
            ['name' => "سيشيل"], // 155
            ['name' => "سيراليون"], // 156
            ['name' => "سنغافورة"], // 157
            ['name' => "سلوفاكيا"], // 158
            ['name' => "سلوفينيا"], // 159
            ['name' => "جزر سليمان"], // 160
            ['name' => "الصومال"], // 161
            ['name' => "جنوب أفريقيا"], // 162
            ['name' => "جنوب السودان"], // 163
            ['name' => "إسبانيا"], // 164
            ['name' => "سري لانكا"], // 165
            ['name' => "السودان"], // 166
            ['name' => "سورينام"], // 167
            ['name' => "السويد"], // 168
            ['name' => "سويسرا"], // 169
            ['name' => "الجمهورية العربية السورية"], // 170
            ['name' => "طاجيكستان"], // 171
            ['name' => "تايلند"], // 172
            ['name' => "تيمور- ليشتي"], // 173
            ['name' => "توغو"], // 174
            ['name' => "تونغا"], // 175
            ['name' => "ترينيداد وتوباغو"], // 176
            ['name' => "تونس"], // 177
            ['name' => "تركيا"], // 178
            ['name' => "تركمانستان"], // 179
            ['name' => "توفالو"], // 180
            ['name' => "أوغندا"], // 181
            ['name' => "أوكرانيا"], // 182
            ['name' => "الإمارات العربية المتحدة"], // 183
            ['name' => "المملكة المتحدة لبريطانيا العظمى وأيرلندا الشمالية"], // 184
            ['name' => "جمهورية تنزانيا المتحدة"], // 185
            ['name' => "الولايات المتحدة الأمريكية"], // 186
            ['name' => "أوروغواي"], // 187
            ['name' => "أوزبكستان"], // 188
            ['name' => "فانواتو"], // 189
            ['name' => "فنزويلا (جمهورية - البوليفارية)"], // 190
            ['name' => "فييت نام"], // 191
            ['name' => "اليمن"], // 192
            ['name' => "زامبيا"], // 193
            ['name' => "زمبابوي"], // 194
            ['name' => "الكرسي الرسولي "], // 195
            ['name' => "دولة فلسطين "], // 196
            ['name' => "جزر كوك "], // 197
            ['name' => "نيوي "], // 198

        ];

        Country::insert($countries);

    }
}
