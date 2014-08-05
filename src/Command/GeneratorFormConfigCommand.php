<?php

namespace Drupal\AppConsole\Command;


class GeneratorFormBaseCommand extends GeneratorFormCommand {

  protected function configure(){
    parent::configure('generate:form');
  }

}