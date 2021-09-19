------1------------

//Велосипед
class bicycle {

 public $Pedal;//педали
 public $purpose;//цепь
 public $frame;//рама
 public  $seat;//сидушка

}
$mybicycle = new bicycle();
$mybicycle->Pedal=;
$mybicycle->purpose=false;
$mybicycle->frame=;
$mybicycle->seat=;



public function sit_on()
{

//сесть на сидение

}

public function Push_back()
{

//Оттолкнуться от земли.

}
public function twist()
{
крутить педали
}

public function Stop_spinning ()
{
Перестать крутить педали
}
$mybicycle->sit_on()
$mybicycle->Push back()
$mybicycle->twist()
$mybicycle->Stop_spinning ()

public function_construct($Pedal, $purpose, $frame, $seat)
{
$this->Pedal =  $Pedal;
$this->purpose = $purpose;
$this->frame = $frame;
$this->seat = $seat;
}


---------------------------2-------------------------------------
//Альбом



class Album {

 public $letter;//лист
}
$myAlbum  = new Album ();


public function open()
{
//открыть альбом.
}

public function draw()
{
//начертить на листе
}
public function Close()
{
//Закрыть альбом
}

$myAlbum->open()
$myAlbum->draw()
$myAlbum->Close()


public function_construct($letter)
{
$this->letter = $letter;

}


------------------------------3-------------------------------

//холодильник
class refrigerator {

   public $thermostat;/термостат 
   public $shelves;//полки
   public $power_cord;//шнур питания
}
$myrefrigerator  = new refrigerator ();


public function Turn_on();
{
//Включить холодильник
}

public function open();
{
//открыть холодильник
}
public function Put_it_down();
{
//положить еду
}

public function Close();
{
//закрыть холодильник
}

$myrefrigerator->Turn_on();
$myrefrigerator->open();
$myrefrigerator->Put_it_down();
$myrefrigerator->Close()


public function_construct($thermostat,$shelves, $power_cord;)
{
$this->thermostat = $thermostat;
$this->shelves = $shelves;
$this->power_cord = $power_cord;
}



-------------------------4----------------------
//Стиральная машина 



class washing_machine
{
public $door; //дверь
public $power_cord; //шнур питания
public $drum; //барабан
public $start_button; //кнопка "старт"
public $stop_button; //кнопка "стоп"
}
$myWashingMachine = new washing_machine(); 

$myWashingMachine->door = false; //дверца закрыта
$myWashingMachine->power_cord = false; //шнур питания не воткнут
$myWashingMachine->start_button = false; //кнопка "старт" не нажата
$myWashingMachine->stop_button = false; //кнопка "стоп" не нажата

public function TurnOnOff ()
{

}
public function OpenCloseDoor ()
{
//код открытия; закрытия двери
}
public function PowerCordOnOff ()
{
//включение в розетку; выключение
}
public function PutClothesInDrum ()
{
//положить вещи в барабан
}

$myWashingMachine->PowerCordOnOff ();
$myWashingMachine->OpenCloseDoor ();
$myWashingMachine->PutClothesInDrum ();
$myWashingMachine->OpenCloseDoor ();
$myWashingMachine->TurnOnOff ();


public function __construct($door, $power_cord, $drum, $start_button, $stop_button)
{
$this->door = $door;
$this->power_cord = $power_cord;
$this->drum = $drum;
$this->start_button = $start_button;
$this->stop_button = $stop_button;
}


----------------------------------5-------------------------------------



//Шкаф
class Cupboard {

 public $shelves;//полки
 public $Door;//дверцы


}
$myCupboard = new Cupboard();
$myCupboard->shelves=;
$myCupboard->Door=false;

public function open()
{
//открыть шкаф.
}

public function Put()
{
//Поставить книгу на полку
}
public function Close()
{
//Закрыть шкаф
}

$myCupboard->open()
$myCupboard->Put()
$myCupboard->Close()


public function_construct($shelves,$Door)
{
$this->shelves =  $shelves;
$this->Door = $Door;
}

----------------------------6--------------------------------
//Посудомоечная_машина


class Dishwasher_machine {

 public $power_cord;//шнур питание
 public $compartment;//отсек
 public $button;//кнопка
 public $water_supply_hose;//шланг подачи воды
}

$myDishwasher_machine  = new Dishwasher_machine ();

public function inclusion()
{
//Включение в розетку
}

public function Open()
{
//открытие дверцу
}
public function Put_it_down ()
{
//положить посуду в отсек
}
public function Close()
{
//закрыть дверцу
}
public function Press()
{
//нажать кнопку
}
public function Pull()
{
//вытащить посуду
}

$myDishwasher_machine->inclusion()
$myDishwasher_machine->open()
$myDishwasher_machine->Put_it_down()
$myDishwasher_machine->Close()
$myDishwasher_machine->Press()
$myDishwasher_machine->Pull()


public function_construct($power_cord,$compartment,$button,$water_supply_hose)
{
$this->power_cord =  $power_cord;
$this->compartment = $compartment;
$this->button = $button;
$this->water_supply_hose = $water_supply_hose;
}




---------------------------7---------------------------------
//Пассажирский_пароход


class Passage_paragus{

 public $endurance;//прочность
 public $speed;//скорость
 public $power;//мощность
 public $company;//фирма
}

$myPassage_paragus  = new Passage_paragus ();


public function Sit();
{
//сесть на пароход
}

public function to_sail();
{
//Плыть на пароходе
}
public function to_go ();
{
//ходить по пароходу
}
public function get_off_the_boat();
{
//сойти с парохода
}

$myPassage_paragus->Sit();
$myPassage_paragus->to_sail();
$myPassage_paragus->to_go();
$myPassage_paragus->get_off_the_boat();


public function_construct($endurance,$speed,$power,$company)
{
$this-endurance =  $endurance;
$this->speed = $speed;
$this->power = $power;
$this->company = $company;
}


---------------------------8--------------------------------------
//Кухонный стол
class Kitchen_table{

 public $durability;//стойкость
 public $endurance;//прочность
 public $price;//цена
 public $company;//фирма
}

$myKitchen_table = new Kitchen_table ();


public function put();
{
//Положить еду на стол
}

public function eat_it();
{
//съесть еду
}
public function remove();
{
//убрать еду со стола
}
public function wipe_it_off();
{
//вытереть стол
}


$myKitchen_table->put();
$myKitchen_table->eat_it();
$myKitchen_table->remove();
$myKitchen_table->wipe_it_off();

public function_construct($durability,$endurance,$price,$company)
{
$this-durability =  $durability;
$this->endurance = $endurance;
$this->price = $price;
$this->company = $company;
}
