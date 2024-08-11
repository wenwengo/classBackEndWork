-
CREATE TABLE `p_portfolios` (
    `id` INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `p_title` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `p_imageName` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `p_imageSMS` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `p_imageMessage` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE = InnoDB;

-- 新增資料到 p_portfolios 資料表
INSERT INTO `p_portfolios` (`id`, `p_title`, `p_imageName`, `p_imageSMS`, `p_imageMessage` ) 
VALUES 
 (NULL , 'Squirrel' ,'collection01.gif','Use shading to create an abstract squirrel image, bright and simple.', '使用陰影創建抽象的松鼠圖像，明亮而簡單。'),
 (NULL, 'Dog', 'collection02.gif', 'The image of the dog is constructed from basic shapes, with bright colors and a quasi-geometric style', '狗的形像是由基本形狀構成的，具有明亮的色彩和準幾何形狀風格'),
 (NULL, 'Butterfly', 'collection03.gif', 'Through the changes in tone of the wheel outline and simple lines, it presents the soft atmosphere of the butterfly', '透過車輪輪廓的色調變化和簡單的線條，呈現出柔和的感覺蝴蝶的氣氛。'),
 (NULL, 'Whale', 'collection04.gif', 'Use simple shapes and bright colors to express the elegance of the whale and the beauty of abstract art.', '用簡潔的造型和鮮豔的色彩來表現鯨魚的優雅和美麗抽象藝術。'),
 (NULL, 'Fowl', 'collection05.gif', 'Use basic shapes and bright colors to create a simple and vivid style of chicken.', '利用基本的造型和鮮豔的色彩，打造出簡單、生動的雞造型。'),
 (NULL, 'Elephant', 'collection06.gif', 'The use of colors and shapes enlivens the elephant′s stable image and makes people feel more comfortable.', '色彩和造型的運用，活躍了大象穩重的形象，令人有心曠神怡的感覺。'),
 (NULL, 'Fox', 'collection07.gif', 'The geometric shape emphasizes the characteristics of the fox′s mouth, ears and long tail,showing its cunning and flexibility.', '幾何形狀強調了狐狸的嘴、耳朵和長尾巴的特徵， 可見其狡猾和靈活。'),
 (NULL, 'Shark', 'collection08.gif', 'Use sharp streamlines to show the shark′s swift and energetic posture.', '用銳利的流線展現鯊魚敏捷而充滿活力的姿態。'),
 (NULL, 'Parrot', 'collection09.gif', 'Bright geometric color blocks are used to form the parrot′s feathers and curved beak, showing its colorful vitality.', '明亮的幾何色塊被用來形成鸚鵡的羽毛和彎曲的喙，展示其多彩的生命力。'),
 (NULL, 'Muntjac', 'collection10.gif', 'The lines present the slender limbs and alert figure of the mountain qiang, suggesting its agileposture.', '線條表現出山羌修長的四肢和機警的身姿，暗示其敏捷的姿態。'),
 (NULL, 'Zebra', 'collection11.gif', 'Through streamlined design and patchy geometric blocks, it presents its unique striped pattern.', '透過流線型的設計和斑駁的幾何塊，呈現出其獨特的條紋圖案。'),
 (NULL, 'Kangaroo', 'collection12.gif', 'Draw using a combination of circles in golden proportions to create its strong hind legs and powerful jumping posture.', '用黃金比例的圓圈組合來畫出它強壯的後腿和強烈的跳躍姿勢。'),
 (NULL, 'Bat', 'collection13', 'Use color tones to enhance the sense of mystery, and use streamlined lines to show its symmetrical beauty.', '利用色調增強神秘感，利用流線型線條展現其對稱之美。'),
 (NULL, 'Cat', 'collection14', 'With a round base as the base, the side profile shows the cat’s unique and agile posture.', '以圓形底座為底座，側面輪廓展現了貓咪獨特敏捷的姿勢。'),
 (NULL, 'Tortoise', 'collection15', 'Gradient colors are combined with bright tones, and the golden ratio is used to compose the image to form the tortoise′s solid shell and steady pace.', '漸層色與明亮色調結合，採用黃金比例構圖，形成烏龜堅實的甲殼和穩健的步伐。'),
 (NULL, 'Ape', 'collection16', 'Use light and shade and simple lines to express the gorilla′s strong muscles and strength.', '用明暗和簡單的線條表現大猩猩強壯的肌肉和力量。'),
 (NULL, 'Chelonia', 'collection17', 'Mix desaturated tones and gradient effects to create a turtle′s streamlined shell and elegant swimming posture.', '混合去飽和色調和漸變效果，創造出烏龜的流線型外殼和優雅的游泳姿勢。'),
 (NULL, 'design portfolio', 'collection18', 'The use of warm and unsaturated colors, combined with streamlined lines, presents a static, vivid and three-dimensional creative design style.', '採用溫暖且不飽和的色彩，結合流線型線條，呈現靜態、生動、立體的創意設計風格。'),
 (NULL, 'Dolphin', 'collection19', 'Dolphin: The color tone presents a visual three-dimensional effect, and the streamlined shape shows its dexterity and friendly characteristics.', '海豚：色調呈現視覺立體效果，流線型造型展現其靈巧、友善的特性。'),
 (NULL, 'Chameleon', 'collection20', 'The combination of colors and the sharp features of the front and rear limbs contribute to its color-changing skin and flexible profile.', '顏色的組合和前後肢的鮮明特徵造就了它變色的皮膚和靈活的輪廓。'),
 (NULL, 'Hippo', 'collection21', 'With its short legs, steady body shape and two small round ears, the combination of brightness creates a three-dimensional, simple and cute visual effect.', '短腿、穩重的體型和兩隻圓圓的小耳朵，明亮的組合營造出立體、簡約、可愛的視覺效果。')

-- -----------------------------------------------------------

CREATE TABLE `p_carousels` (
    `id` INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`),
    `p_imageName` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `p_imageAlt` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
    `p_imageTitle` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE = InnoDB;

-- 新增資料到 p_carousels 資料表
INSERT INTO `p_carousels` (`id`, `p_imageName`, `p_imageAlt`, `p_imageTitle` ) 
VALUES 
 (NULL , 'carousel01.png' ,'校園資訊系統建置', '校園資訊系統建置'),
 (NULL , 'carousel02.png' ,'線上社群平臺建置', '線上社群平臺建置'),
 (NULL , 'carousel03.png' ,'電影線上訂票系統建置', '電影線上訂票系統建置')
-- -----------------------------------------------------------
