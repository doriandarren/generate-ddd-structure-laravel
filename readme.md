## About Project

Generate basic folder structure in hexagonal/ddd architecture for Laravel

```sh
composer require infinito/generate-ddd-structure-laravel
```


To implement class or method

```sh
class ClassName {
    public function methodName(){
        $bounded = 'Bounded';
        $className = 'User';
        $generator = new \Infinito\GenerateDDDStructure\StructureGenerator();
        $generator->create($bounded, $className);
    }
}
```
