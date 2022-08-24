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
        $hello = new \Infinito\GenerateDDDStructure\StructureGenerator();
        $hello->create($bounded, $className);
    }
}
```
